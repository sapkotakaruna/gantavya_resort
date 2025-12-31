<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Award extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',

    ];
    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($award) {
            if (!isset($award->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $award->rank = $maxRank + 1;
            }
        });

        static::deleting(function ($award) {
            if ($award->image_path) {
                Storage::disk('public')->delete($award->image_path);
            }
        });
    }
}
