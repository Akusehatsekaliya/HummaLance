<?php

use App\Constract\Enums\ApprovalStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constract\Enums\StatusContractEnum;
use App\Constract\Enums\StatusPaymentEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('amount_id')->constrained('projects')->onDelete('cascade');
            $table->enum('status', [
                StatusContractEnum::PROGRESS->value,
                StatusContractEnum::COMPLETE->value,
            ])->default(StatusContractEnum::PROGRESS->value);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('file')->nullable();
            $table->text('description')->nullable();
            $table->enum('payment_status',[
                StatusPaymentEnum::COMPLETE->value,
                StatusPaymentEnum::PENDING->value,
            ])->default(StatusPaymentEnum::PENDING->value,);
            $table->enum('approval_status',[
                ApprovalStatusEnum::REJECTED->value,
                ApprovalStatusEnum::PENDING->value,
                ApprovalStatusEnum::APPROVED->value,
            ])->default(ApprovalStatusEnum::APPROVED->value,);
            $table->date('payment_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
