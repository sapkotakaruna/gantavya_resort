<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Message extends Model
{
    protected $fillable = [
        'name',
        'post',
        'description',
        'image_path',

    ];
    protected $casts = [
        'status' => 'boolean',
        'rank' => 'integer',
    ];
    protected static function booted(): void
    {
        static::creating(function ($message) {
            if (!isset($message->rank)) {
                $maxRank = static::max('rank') ?? 0;
                $message->rank = $maxRank + 1;
            }
        });

        static::deleting(function ($message) {
            if ($message->image_path) {
                Storage::disk('public')->delete($message->image_path);
            }
        });
    }

    }
