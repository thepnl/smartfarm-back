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
        Schema::create('corporates', function (Blueprint $table) {
            $table->id();
            $table->string('field', 10)->comment('분야');
            $table->string('company_type', 10)->comment('기업유형');
            $table->string('distribution_type', 100)->comment('유통형태');
            $table->string('company_name', 100)->comment('기업명');
            $table->string('location', 100)->comment('소재지');
            $table->string('products', 255)->comment('취급품');
            $table->string('contact', 20)->comment('연락처');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporates');
    }
};
