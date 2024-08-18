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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->integer('temperature');
            $table->integer('weight');
            $table->integer('blood_sugar');
            $table->string('blood_pressure');
            $table->integer('heart_rate');
            $table->integer('saturation');
            $table->integer('respiratory_rate');
            $table->text('notes');
            $table->text('special_treatment');
            $table->text('medication');
            $table->dateTime('date');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });

        Schema::create('image_medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('medical_record_id');
            $table->foreign('medical_record_id')->references('id')->on('medical_records');
            $table->string('photo', 255);
            $table->string('description', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
        Schema::dropIfExists('image_medical_records');
    }
};
