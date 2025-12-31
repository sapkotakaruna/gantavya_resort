<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsNotice extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'date',
        'author',
        'is_featured',
        'image_path',
        'rank',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
        'is_featured' => 'boolean',
        'rank' => 'integer',
        'date' => 'date',
    ];

    protected static function booted(): void
    {
        static::saving(function ($newsNotice) {
            if ($newsNotice->title && (!$newsNotice->slug || $newsNotice->isDirty('title'))) {
                $slug = Str::slug($newsNotice->title);
                $count = 1;
                $originalSlug = $slug;
                while (static::where('slug', $slug)->where('id', '!=', $newsNotice->id)->exists()) {
                    $slug = $originalSlug . '-' . $count;
                    $count++;
                }
                $newsNotice->slug = $slug;
            }
        });

        static::creating(function ($newsNotice) {
            if (!isset($newsNotice->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $newsNotice->rank = $maxRank + 1;
            }
        });

        static::deleting(function ($newsNotice) {
            if ($newsNotice->image_path) {
                Storage::disk('public')->delete($newsNotice->image_path);
            }
        });
    }
}
