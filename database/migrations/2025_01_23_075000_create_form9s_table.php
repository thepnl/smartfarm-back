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
        Schema::create('form9s', function (Blueprint $table) {
            $table->id();
            $table->json('info1')->nullable();
            $table->json('info2')->nullable();
            $table->json('info3')->nullable();
            $table->json('info4')->nullable();
            $table->json('info5')->nullable();
            $table->json('info6')->nullable();
            $table->json('info7')->nullable();
            $table->json('info8')->nullable();
            $table->json('info9')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form9s');
    }
};
