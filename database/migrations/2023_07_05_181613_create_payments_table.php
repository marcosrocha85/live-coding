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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('installment_id');
            $table->unsignedBigInteger('installment_installment_id');
            $table->dateTime('emission_date');
            $table->decimal('amount', $precision = 15, $scale = 4);
            $table->decimal('fine', $precision = 15, $scale = 4);
            $table->decimal('interest', $precision = 15, $scale = 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
