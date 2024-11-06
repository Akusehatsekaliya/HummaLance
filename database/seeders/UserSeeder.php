<?php

namespace Database\Seeders;

use App\Constract\Enums\UserRoleEnum;
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
        User::factory()->create([
            'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => UserRoleEnum::ADMIN->value
        ]);
        User::factory()->create([
            'username' => 'Freelancer',
            'name' => 'Freelancer',
            'email' => 'freelancer@gmail.com',
            'role' => UserRoleEnum::FREELANCER->value,
        ]);

        $teamAccount = [
            [
                'username' => 'Syauqi Ali',
                'name' => 'Ahmad Syauqi Ali Syahbana',
                'email' => 'sauqi2019@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
            [
                'username' => 'Cintaa',
                'name' => 'Cinta Adenia',
                'email' => 'ccintaadenia06@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
            [
                'username' => 'Nasya',
                'name' => 'Nasya Asriva Putri Artama',
                'email' => 'asrivanasya0@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
            [
                'username' => 'Tika',
                'name' => 'NUGI ARTIKASARI',
                'email' => 'ar.tika0412@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
            [
                'username' => 'Andhika',
                'name' => 'Andhika Mugni',
                'email' => 'andhikamugniv@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
            [
                'username' => 'Refal',
                'name' => 'Rifaldi Menolak Sadar',
                'email' => 'rifaldiliebert@gmail.com',
                'role' => UserRoleEnum::CLIENT->value
            ],
        ];
        foreach ($teamAccount as $account) {
            User::factory()->create($account);
        }
    }
}
