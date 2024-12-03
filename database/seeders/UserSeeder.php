<?php

namespace Database\Seeders;

use App\Constract\Enums\UserGenderEnum;
use App\Constract\Enums\UserRoleEnum;
use App\Constract\Enums\UserSkilsEnum;
use App\Constract\Enums\UserStatusEnum;
use App\Constract\Enums\UserStatusLoginEnum;
use App\Constract\Enums\UserStatusRegisterEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Enums\RoleUserEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.user
     */
    public function run(): void
    {
        User::factory()->withRole(UserRoleEnum::ADMIN->value)->create([
            'first_name' => 'Admin',
            'last_name' => 'syauqi',
            'email' => 'admin@gmail.com'
        ]);
        User::factory()->withRole(UserRoleEnum::FREELANCER->value)->create([
            'first_name' => 'Freelancer',
            'last_name' => 'mugni',
            'email' => 'freelancer@gmail.com',
            'status' => UserStatusEnum::NULL->value,
            'phone' => '085796783031',
            'birthday' => '1990-01-01',
            'address' => '123 Main Street, City, Country',
            'gender' => UserGenderEnum::MALE->value,
            'skills' => UserSkilsEnum::UI_UX->value,
            'status_login' => UserStatusLoginEnum::ONLINE->value,
            'status_acount_register' => UserStatusRegisterEnum::PENDING->value,
        ]);

        $teamAccount = [
            [
                'first_name' => 'Ahmad',
                'last_name' => 'Syauqi',
                'email' => 'sauqi2019@gmail.com',
                'status' => UserStatusEnum::NULL->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::PENDING->value,
            ],
            [
                'first_name' => 'Cinta',
                'last_name' => 'Adenia',
                'email' => 'ccintaadenia06@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FEMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::ACCEPTED->value,
            ],
            [
                'first_name' => 'Nasya',
                'last_name' => 'Asriva',
                'email' => 'asrivanasya0@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FEMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::ACCEPTED->value,
            ],
            [
                'first_name' => 'Nugi',
                'last_name' => 'Antartika',
                'email' => 'ar.tika0412@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::FEMALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::ACCEPTED->value,
            ],
            [
                'first_name' => 'Andhika',
                'last_name' => 'mugni',
                'email' => 'andhikamugniv@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::ACCEPTED->value,
            ],
            [
                'first_name' => 'Rifaldi',
                'last_name' => 'Gendeng',
                'email' => 'rifaldiliebert@gmail.com',
                'status' => UserStatusEnum::ACTIVE->value,
                'phone' => '085796783031',
                'birthday' => '1990-01-01',
                'address' => '123 Main Street, City, Country',
                'gender' => UserGenderEnum::MALE->value,
                'skills' => UserSkilsEnum::UI_UX->value,
                'status_login' => UserStatusLoginEnum::ONLINE->value,
                'status_acount_register' => UserStatusRegisterEnum::ACCEPTED->value,
            ],
        ];
        foreach ($teamAccount as $account) {
            User::factory()->withRole(UserRoleEnum::CLIENT->value)->create($account);
        }
    }
}
