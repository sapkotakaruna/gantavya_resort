<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'location',
        'email',
        'phone',
        'office_hour',

        'facebook_link',
        'instagram_link',
        'x_link',
        'youtube_link',
        'linkedin_link',

        'footer_menu_1_title',
        'footer_menu_1_link',
        'footer_menu_2_title',
        'footer_menu_2_link',
        'footer_menu_3_title',
        'footer_menu_3_link',
        'footer_menu_4_title',
        'footer_menu_4_link',

    ];
    protected $appends = ['logo_url'];
    public function getLogoUrlAttribute(): ?string
    {
        if (!$this->logo) {
            return null;
        }

        // Generate full public URL manually
        return Storage::url($this->logo);
    }

    protected static function booted(): void
    {
        static::deleting(function ($siteSetting) {
            if ($siteSetting->logo) {
                Storage::disk('public')->delete($siteSetting->logo);
            }
        });
    }
}
