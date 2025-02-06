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
        Schema::create('month_trends', function (Blueprint $table) {
            $table->id()->comment('아이디');
            $table->string('p_productno', 20)->comment('품목코드');
            $table->string('yyyy', 10)->comment('연도');
            $table->string('d40', 10)->comment('40일전');
            $table->string('d30', 10)->comment('30일전');
            $table->string('d20', 10)->comment('20일전');
            $table->string('d10', 10)->comment('10일전');
            $table->string('d0', 10)->comment('당일');
            $table->string('mx', 10)->comment('최고 가격');
            $table->string('mn', 10)->comment('최저 가격');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('month_trends');
    }
};
