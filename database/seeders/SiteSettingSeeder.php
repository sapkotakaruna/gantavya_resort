<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        // Prevent duplicate site settings
        if (SiteSetting::exists()) {
            return;
        }

        SiteSetting::create([
            'site_name' => 'My Company Name',
            'logo' => null,

            'location' => 'Kathmandu, Nepal',
            'email' => 'info@example.com',
            'phone' => '+977-9800000000',

            // Social Links
            'facebook_link'  => 'https://facebook.com/',
            'instagram_link' => 'https://instagram.com/',
            'x_link'         => 'https://x.com/',
            'youtube_link'   => 'https://youtube.com/',
            'linkedin_link'  => 'https://linkedin.com/',

            // Footer Menu (Minimum 4)
            'footer_menu_1_title' => 'About Us',
            'footer_menu_1_link'  => '/about',

            'footer_menu_2_title' => 'Services',
            'footer_menu_2_link'  => '/services',

            'footer_menu_3_title' => 'News',
            'footer_menu_3_link'  => '/news',

            'footer_menu_4_title' => 'Contact',
            'footer_menu_4_link'  => '/contact',


            // Office Hours
            'office_hour' => 'Sunday – Friday: 9:00 AM – 5:00 PM',
        ]);
    }
}
