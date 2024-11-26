<?php

namespace Database\Seeders;

use App\Constract\Enums\UserGenderEnum;
use App\Constract\Enums\UserRoleEnum;
use App\Constract\Enums\UserSkilsEnum;
use App\Constract\Enums\UserStatusEnum;
use App\Constract\Enums\UserStatusLoginEnum;
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
            'status' => UserStatusEnum::ACTIVE->value,
            'phone' => '085796783031',
            'birthday' => '1990-01-01',
            'address' => '123 Main Street, City, Country',
            'gender' => UserGenderEnum::MALE->value,
            'skills' => UserSkilsEnum::UI_UX->value,
            'status_login' => UserStatusLoginEnum::ONLINE->value
        ]);

        $teamAccount = [
            [
                'name' => 'Ahmad Syauqi Ali Syahbana',
                'email' => 'sauqi2019@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
            [
                'name' => 'Cintaa',
                'email' => 'ccintaadenia06@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FAMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
            [
                'name' => 'Nasya Asriva Putri Artama',
                'email' => 'asrivanasya0@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FAMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
            [
                'name' => 'NUGI ARTIKASARI',
                'email' => 'ar.tika0412@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FAMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
            [
                'name' => 'Andhika Mugni',
                'email' => 'andhikamugniv@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
            [
                'name' => 'Rifaldi Menolak Sadar',
                'email' => 'rifaldiliebert@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value
            ],
        ];
        foreach ($teamAccount as $account) {
            User::factory()->withRole(UserRoleEnum::CLIENT->value)->create($account);
        }
    }
}
