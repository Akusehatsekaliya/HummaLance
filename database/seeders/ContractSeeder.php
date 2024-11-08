<?php

namespace Database\Seeders;

use App\Constract\Enums\StatusContractEnum;
use App\Models\Contract;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contract::create([
            'project_id' => 1,
            'user_id' => 3,
            'status' => StatusContractEnum::PROGRESS->value,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(7),
        ]);
        Contract::create([
            'project_id' => 2,
            'user_id' => 5,
            'status' => StatusContractEnum::PROGRESS->value,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(7),
        ]);
        Contract::create([
            'project_id' => 3,
            'user_id' => 2,
            'status' => StatusContractEnum::PROGRESS->value,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(7),
        ]);
        Contract::create([
            'project_id' => 4,
            'user_id' => 4,
            'status' => StatusContractEnum::PROGRESS->value,
            'start_date' => Carbon::now(),
            'end_date' => Carbon::now()->addDays(7),
        ]);
    }
}
