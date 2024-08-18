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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('species', 255);
            $table->string('breed', 255);
            $table->string('color', 255);
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->boolean('sterilized');
            $table->text('vaccination_history');
            $table->text('health_history');
            $table->text('notes');
            $table->string('photo', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
