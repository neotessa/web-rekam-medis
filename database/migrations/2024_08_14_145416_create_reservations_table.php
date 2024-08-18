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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->dateTime('reservation_date');
            $table->integer('status')->comment('1 = registered, 2 = in examination, 3 = completed');
            $table->string('service_name', 255);
            $table->unsignedBigInteger('doctor_user_id');
            $table->unsignedBigInteger('admin_user_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('doctor_user_id')->references('id')->on('users');
            $table->foreign('admin_user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
