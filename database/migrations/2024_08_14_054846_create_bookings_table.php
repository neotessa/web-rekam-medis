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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('booking_date');
            $table->integer('status')->default(1)->comment('1 = Booked, 2 = On Progress, 3 = Done');
            $table->text('service_name');
            $table->unsignedBigInteger('user_id')->comment('Get the doctor role or the nurse');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('patient');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
