<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AboutUs extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image_path',
        'status',
        'rank',
    ];

    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saving(function ($aboutUs) {
            if ($aboutUs->title && (!$aboutUs->slug || $aboutUs->isDirty('title'))) {
                $slug = Str::slug($aboutUs->title);
                $count = 1;
                $originalSlug = $slug;
                while (static::where('slug', $slug)->where('id', '!=', $aboutUs->id)->exists()) {
                    $slug = $originalSlug . '-' . $count;
                    $count++;
                }
                $aboutUs->slug = $slug;
            }
        });

        static::creating(function ($aboutUs) {
            if (!isset($aboutUs->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $aboutUs->rank = $maxRank + 1;
            }
        });

        static::deleting(function ($aboutUs) {
            if ($aboutUs->image_path) {
                Storage::disk('public')->delete($aboutUs->image_path);
            }
        });
    }
}
