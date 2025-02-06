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
        Schema::create('codes', function (Blueprint $table) {
            $table->id()->comment('아이디');
            $table->boolean('public')->default(true);
            $table->foreignId('user_id')->nullable();
            $table->string('category_code', 3)->comment('품목 그룹코드/부류코드');
            $table->string('category_name')->comment('품목 그룹명/부류명');
            $table->string('productno', 20)->comment('품목 코드');
            $table->string('productName')->comment('품목명');
            $table->string('breed_code', 2)->comment('품종코드');
            $table->string('breed_name')->comment('품종명');
            $table->string('wholesale_unit', 20)->comment('도매출하단위');
            $table->string('wholesale_unit_size', 20)->comment('도매출하단위 크기');
            $table->string('retail_unit', 20)->comment('소매출하단위');
            $table->string('retail_unit_size', 20)->comment('소매출하단위 크기');
            $table->string('eco_friendly_unit', 20)->comment('친환경농산물출하단위(20.4~)');
            $table->string('eco_friendly_unit_size', 20)->comment('친환경농산물출하단위크기(20.4~)');
            $table->string('wholesale_grade', 20)->comment('도매 등급');
            $table->string('retail_grade', 20)->comment('소매 등급');
            $table->string('eco_friendly_grade', 20)->comment('친환경 등급(20.4~)');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codes');
    }
};
