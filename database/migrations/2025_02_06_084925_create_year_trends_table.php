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
        Schema::create('year_trends', function (Blueprint $table) {
            $table->id()->comment('아이디');
            $table->string('p_productno', 20)->comment('품목코드');
            $table->string('yyyy', 10)->comment('연도');
            $table->string('max', 10)->comment('최고가격');
            $table->string('min', 10)->comment('최저가격');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('year_trends');
    }
};
