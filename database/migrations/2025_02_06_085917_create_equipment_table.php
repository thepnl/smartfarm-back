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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('application_field', 10)->comment('활용분야');
            $table->string('standard_device_name', 10)->comment('표준장치명');
            $table->string('detailed_device_name', 10)->comment('세부장치명');
            $table->string('model_name', 100)->comment('모델명');
            $table->string('manufacturer', 100)->comment('제조사');
            $table->string('registered_company', 100)->comment('등록기업');
            $table->string('manufacturing_country', 100)->comment('제조국');
            $table->string('kc_certification', 10)->comment('KC인증');
            $table->string('approval_date', 20)->comment('승인일');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipment');
    }
};
