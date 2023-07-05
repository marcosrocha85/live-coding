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
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBitInteger('installment');
            $table->enum('installment_type', ['RECEIVE', 'PAY'])->default('RECEIVE');
            $table->unsignedBitInteger('person_id');
            $table->dateTime('emission_date');
            $table->dateTime('due_date');
            $table->unsignedBitInteger('account_plan_id');
            $table->decimal('amount', $precision = 15, $scale = 4);
            $table->dateTime('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('installments');
    }
};
