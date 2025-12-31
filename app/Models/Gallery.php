<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'main_image',
        'description',
        'status',
    ];
    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($gallery) {
            if (!isset($gallery->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $gallery->rank = $maxRank + 1;
            }
        });
    }
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }
}
