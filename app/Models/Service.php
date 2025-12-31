<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{
    protected $fillable = [
        'service_category_id',
        'name',
        'description',
        'image_path',


    ];
    protected $casts = [
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

        static::deleting(function ($service) {
            if ($service->image_path) {
                Storage::disk('public')->delete($service->image_path);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id', 'id');
    }
}
