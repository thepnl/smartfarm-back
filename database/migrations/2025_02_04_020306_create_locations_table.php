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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->boolean('public')->default(true);
            $table->string('building_name')->default(0);
            $table->string('room_name')->nullable();
            $table->string('room_type')->nullable();
            $table->integer('room_floor')->default(0);
            $table->integer('room_number')->nullable();
            $table->string('populations')->nullable();
            $table->string('gender')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
