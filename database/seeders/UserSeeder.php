<?php

namespace Database\Seeders;

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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => RoleUserEnum::ADMIN->value,
        ]);
        User::factory()->create([
            'name' => 'Client User',
            'email' => 'client@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => RoleUserEnum::CLIENT->value,
        ]);
        User::factory()->create([
            'name' => 'Freelancer User',
            'email' => 'freelancer@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => RoleUserEnum::FREELANCER->value,
        ]);
    }
}
