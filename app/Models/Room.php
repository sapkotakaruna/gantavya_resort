<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Room extends Model
{
    protected $fillable = [
        'name',
        'room_type',
        'price_per_night',
        'max_guests',
        'size',
        'description',
        'main_image',
        'gallery_images',
        'amenities',
        'is_active',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'amenities' => 'array',
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($room) {
            if (!isset($room->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $room->rank = $maxRank + 1;
            }
        });

        static::deleting(function ($room) {
            if ($room->main_image) {
                Storage::disk('public')->delete($room->main_image);
            }
            if (is_array($room->gallery_images)) {
                foreach ($room->gallery_images as $imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }
            }
        });
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
