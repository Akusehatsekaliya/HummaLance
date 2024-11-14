<?php

namespace Database\Seeders;

use App\Constract\Enums\StatusPaymentEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'reference_id' => 'PAY-1234567890',
                'contract_id' => 1,
                'amount' => 1000000,
                'payment_method' => 'Bank Transfer',
                'payment_channel' => 'BCA',
                'invoice_url' => 'https://example.com/invoice/1234567890',
                'expiry_date' => '2024-11-15',
                'paid_amount' => 1000000,
                'ref' => 'REF-1234567890',
                'status' => StatusPaymentEnum::COMPLETE->value,
                'payment_date' => '2024-11-10',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'reference_id' => 'PAY-9876543210',
                'contract_id' => 2,
                'amount' => 500000,
                'payment_method' => 'E-Wallet',
                'payment_channel' => 'GoPay',
                'invoice_url' => 'https://example.com/invoice/9876543210',
                'expiry_date' => '2024-11-20',
                'paid_amount' => 0,
                'ref' => 'REF-9876543210',
                'status' => StatusPaymentEnum::PENDING->value,
                'payment_date' => null,
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}