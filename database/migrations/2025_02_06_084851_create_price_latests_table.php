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
        Schema::create('price_latests', function (Blueprint $table) {
            $table->id();
            $table->string('product_cls_code', 20)->comment('구분 (01:소매, 02:도매)');
            $table->string('product_cls_name', 20)->comment('구분 이름');
            $table->string('category_code', 20)->comment('부류코드');
            $table->string('category_name', 20)->comment('부류명');
            $table->string('productno', 20)->comment('품목코드');
            $table->string('lastest_day', 20)->comment('최근조사일');
            $table->string('productName', 30)->comment('품목명');
            $table->string('item_name', 30)->comment('품목명');
            $table->string('unit', 20)->comment('단위');
            $table->string('day1', 20)->comment('최근 조사일자');
            $table->string('dpr1', 20)->comment('최근 조사일자 가격');
            $table->string('day2', 20)->comment('1일전 일자');
            $table->string('dpr2', 20)->comment('1일전 가격');
            $table->string('day3', 20)->comment('1개월전 일자');
            $table->string('dpr3', 20)->comment('1개월전 가격');
            $table->string('day4', 20)->comment('1년전 일자');
            $table->string('dpr4', 20)->comment('1년전 가격');
            $table->string('direction', 20)->comment('등락여부 (0: 가격하락, 1: 가격상승, 2: 등락없음)');
            $table->string('value', 20)->comment('등락율');
            $table->string('result_code', 20)->comment('결과코드');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_latests');
    }
};
