<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'image_path',
        'label',
        'link',
        'rank',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];

    protected $appends = ['image_path_url'];
    public function getImagePathUrlAttribute(): ?string
    {
        if (!$this->image_path) {
            return null;
        }

        // Generate full public URL manually
        return Storage::url($this->image_path);
    }
    /**
     * Boot method to handle model events
     */
    protected static function booted(): void
    {
        // Set rank automatically when creating new slider
        static::creating(function ($slider) {
            if (!isset($slider->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $slider->rank = $maxRank + 1;
            }
        });

        // Delete image when slider is deleted
        static::deleting(function ($slider) {
            if ($slider->image_path) {
                Storage::disk('public')->delete($slider->image_path);
            }
        });
    }
}
