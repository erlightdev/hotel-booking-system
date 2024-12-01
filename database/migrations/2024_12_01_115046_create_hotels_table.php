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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('address', 255);
            $table->string('city', 100);
            $table->string('state', 100);
            $table->string('country', 100);
            $table->integer('total_rooms');
            $table->string('star_rating')->nullable();
            $table->string('contact_email', 150);
            $table->string('contact_phone', 20);
            $table->boolean('is_active')->default(true);
            $table->json('amenities')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
