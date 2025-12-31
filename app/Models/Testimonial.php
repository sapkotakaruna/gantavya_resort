<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'post',
        'country_name',
        'description',
        'image_path',

    ];
    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($testimonial) {
            if (!isset($testimonial->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $testimonial->rank = $maxRank + 1;
            }
        });
        static::deleting(function ($testimonial) {
            if ($testimonial->image_path) {
                Storage::disk('public')->delete($testimonial->image_path);
            }
        });
    }
}
