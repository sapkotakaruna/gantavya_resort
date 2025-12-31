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
        Schema::create('dinings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(); // Menu name or Dining
            $table->enum('type', ['dining', 'menu']);
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->nullable(); // only menu
            $table->string('time')->nullable(); // only dining 
            $table->json('dining_hours')->nullable(); // breakfast, lunch, dinner with times (only dining)
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
        Schema::dropIfExists('dinings');
    }
};
