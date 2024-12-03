<?php

namespace Database\Seeders;

use App\Models\UserReport;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = \Faker\Factory::create();

        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $usersId = $faker->numberBetween(2, 8);
            $reportedUserId = $faker->numberBetween(2, 8);

            while ($usersId === $reportedUserId) {
                $reportedUserId = $faker->numberBetween(2, 8);
            }

            $data[] = [
                'user_id' => $usersId,
                'message' => $faker->sentence(10),
                'reported_user_id' => $reportedUserId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        UserReport::insert($data);
    }
}
