<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('logo')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('office_hour')->nullable();

            // Social Links
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('x_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('linkedin_link')->nullable();

            // Footer Menu (4 minimum)
            $table->string('footer_menu_1_title')->nullable();
            $table->string('footer_menu_1_link')->nullable();
            $table->string('footer_menu_2_title')->nullable();
            $table->string('footer_menu_2_link')->nullable();
            $table->string('footer_menu_3_title')->nullable();
            $table->string('footer_menu_3_link')->nullable();
            $table->string('footer_menu_4_title')->nullable();
            $table->string('footer_menu_4_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
