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
        Schema::create('farm_lists', function (Blueprint $table) {
            $table->id();
            $table->string('organization_type', 20); 
            $table->string('farm_name', 100); 
            $table->string('crop', 100); 
            $table->string('location', 100); 
            $table->string('contact', 20);
            $table->timestamps(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farm_lists');
    }
};
