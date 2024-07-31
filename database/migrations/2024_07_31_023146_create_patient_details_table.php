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
        Schema::create('patient_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id')->comment('get the patient id not by foreignId column types to prevent complex updating in future');
            $table->string('temperature')->comment('uses the string data type because there are temperature units such as celcius');
            $table->string('bodyweight')->comment('uses the string data type because there are weight units such as kilograms');
            $table->longText('behaviour');
            $table->string('blood_sugar')->comment('uses string data type because there are blood sugar units such as mg/dL');
            $table->string('blood_pressure')->comment('uses the string data type because there are blood pressure units such as mmHg');
            $table->string('heartbeat')->comment('uses the string data type because there are heartbeat units such as BPM (Beat Per Minute)');
            $table->string('saturation')->comment('uses the string data type because saturation uses percent');
            $table->string('respiratory_rate')->comment('uses the string data type because respiratory rate uses BPM (Breath Per Minute)');
            $table->integer('status')->comment('1 = Rawat Inap, 2 = Rawat Jalan, 3 = Pulang');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_details');
    }
};
