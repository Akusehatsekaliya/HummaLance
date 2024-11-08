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
        User::factory()->withRole(UserRoleEnum::ADMIN->value)->create([
            'username' => 'Admin',
            'name' => 'Admin',
            'email' => 'admin@gmail.com'
        ]);
        User::factory()->withRole(UserRoleEnum::FREELANCER->value)->create([
            'username' => 'Freelancer',
            'name' => 'Freelancer',
            'email' => 'freelancer@gmail.com'
        ]);

        $teamAccount = [
            [
                'username' => 'Syauqi Ali',
                'name' => 'Ahmad Syauqi Ali Syahbana',
                'email' => 'sauqi2019@gmail.com'
            ],
            [
                'username' => 'Cintaa',
                'name' => 'Cinta Adenia',
                'email' => 'ccintaadenia06@gmail.com'
            ],
            [
                'username' => 'Nasya',
                'name' => 'Nasya Asriva Putri Artama',
                'email' => 'asrivanasya0@gmail.com'
            ],
            [
                'username' => 'Tika',
                'name' => 'NUGI ARTIKASARI',
                'email' => 'ar.tika0412@gmail.com'
            ],
            [
                'username' => 'Andhika',
                'name' => 'Andhika Mugni',
                'email' => 'andhikamugniv@gmail.com'
            ],
            [
                'username' => 'Refal',
                'name' => 'Rifaldi Menolak Sadar',
                'email' => 'rifaldiliebert@gmail.com'
            ],
        ];
        foreach ($teamAccount as $account) {
            User::factory()->withRole(UserRoleEnum::CLIENT->value)->create($account);
        }
    }
}