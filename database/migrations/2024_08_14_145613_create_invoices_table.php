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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number', 255)->unique();
            $table->dateTime('date');
            $table->integer('total');
            $table->integer('payment');
            $table->text('notes');
            $table->integer('payment_method')->comment('1 = cash, 2 = bank transfer, 3 = credit card, 4 = e-wallet');
            $table->integer('status')->comment('1 = unpaid, 2 = paid');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->timestamps();
        });

        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('item_category_id');
            $table->text('description');
            $table->integer('quantity');
            $table->integer('price_per_item');
            $table->integer('total');
            $table->integer('status')->comment('1 = in treatment, 2 = discharged');
            $table->foreign('invoice_id')->references('id')->on('invoices');
            $table->foreign('item_category_id')->references('id')->on('item_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoices_items');
    }
};
