<?php

use App\Constract\Enums\StatusPaymentEnum;
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
            $table->string('reference_id')->unique();
            $table->foreignId('contract_id')->constrained('contracts')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method');
            $table->string('payment_channel');
            $table->string('invoice_url');
            $table->date('expiry_date');
            $table->integer('paid_amount');
            $table->string(column: 'ref');
            $table->enum('status', [
                StatusPaymentEnum::PENDING->value,
                StatusPaymentEnum::COMPLETE->value,
            ])->default(StatusPaymentEnum::PENDING->value);
            $table->date('payment_date');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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