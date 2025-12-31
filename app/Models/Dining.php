<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Dining extends Model
{
    protected $fillable = [
        'title',
        'type',
        'image',
        'description',
        'price',
        'time',
        'dining_hours',

    ];

    protected $casts = [
        'dining_hours' => 'array',
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($service) {
            if (!isset($service->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $service->rank = $maxRank + 1;
            }
        });


        static::deleting(function ($dining) {
            if ($dining->image) {
                Storage::disk('public')->delete($dining->image);
            }
        });
    }
}
