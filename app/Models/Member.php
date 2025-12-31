<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Member extends Model
{
    protected $fillable = [
        'name',
        'image_path',
        'post',

    ];
    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];

    protected static function booted(): void
    {
        static::creating(function ($member) {
            if (!isset($member->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $member->rank = $maxRank + 1;
            }
        });
        static::deleting(function ($member) {
            if ($member->image_path) {
                Storage::disk('public')->delete($member->image_path);
            }
        });
    }
}
