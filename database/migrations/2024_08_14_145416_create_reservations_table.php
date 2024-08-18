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
            $table->integer('service')->comment('1 = Appointment, 2 = Grooming, 3 = Rawat Inap, 4 = Rawat Jalan');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('nurse_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('patient_id');
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
