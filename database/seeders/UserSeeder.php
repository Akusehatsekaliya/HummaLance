<?php

namespace Database\Seeders;

use App\Constract\Enums\UserRoleEnum;
use App\Constract\Enums\UserStatusEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RoleUserEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->withRole(UserRoleEnum::ADMIN->value)->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com'
        ]);
        User::factory()->withRole(UserRoleEnum::FREELANCER->value)->create([
            'name' => 'Freelancer',
            'email' => 'freelancer@gmail.com',
            'status' => UserStatusEnum::ACTIVE->value
        ]);

        $teamAccount = [
            [
                'name' => 'Ahmad Syauqi Ali Syahbana',
                'email' => 'sauqi2019@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
            [
                'name' => 'Cintaa',
                'email' => 'ccintaadenia06@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
            [
                'name' => 'Nasya Asriva Putri Artama',
                'email' => 'asrivanasya0@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
            [
                'name' => 'NUGI ARTIKASARI',
                'email' => 'ar.tika0412@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
            [
                'name' => 'Andhika Mugni',
                'email' => 'andhikamugniv@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
            [
                'name' => 'Rifaldi Menolak Sadar',
                'email' => 'rifaldiliebert@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value
            ],
        ];
        foreach ($teamAccount as $account) {
            User::factory()->withRole(UserRoleEnum::CLIENT->value)->create($account);
        }
    }
}
