<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Constract\Enums\StatusPaymentEnum;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payment::create([
            'contract_id' => 1,
            'amount' => 200000,
            'status' => StatusPaymentEnum::PENDING->value,
            'payment_date' => Carbon::now(),
            'user_id' => 3,
        ]);
    }
}
