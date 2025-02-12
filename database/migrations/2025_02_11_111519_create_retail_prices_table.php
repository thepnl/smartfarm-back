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
        Schema::create('retail_prices', function (Blueprint $table) {
            $table->id(); 
            $table->string('itemcategorycode', 3)->comment('품목 코드');
            $table->string('itemcode', 3)->comment('품목코드');
            $table->string('kindcode', 2)->comment('품종코드');
            $table->string('productrankcode', 2)->comment('등급코드');
            $table->string('countyname', 10)->comment('지역명');
            $table->string('marketname', 10)->nullable()->comment('시장명'); 
            $table->string('yyyy', 4)->comment('연도');
            $table->string('regday', 5)->comment('날짜');
            $table->string('price', 10)->comment('가격');
            $table->timestamps(0); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retail_prices');
    }
};
