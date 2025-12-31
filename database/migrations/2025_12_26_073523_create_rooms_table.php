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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('room_type');
            $table->decimal('price_per_night', 10, 2);
            $table->integer('max_guests');
            $table->integer('size')->nullable();

            $table->text('description')->nullable();

            $table->string('main_image')->nullable();
            $table->json('gallery_images')->nullable();

            $table->boolean('status')->default(true);
            $table->integer('rank')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
