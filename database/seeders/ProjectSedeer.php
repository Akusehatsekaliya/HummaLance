<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::factory()->create([
            'name' => 'Website Profile',
            'description' => 'profil sekolah',
            'budget' => 100000,
            'user_id' => 3,
            'category_id' => 3,
        ]);
        Project::factory()->create([
            'name' => 'Desain Logo',
            'description' => 'Logo Transfomer',
            'budget' => 100000,
            'user_id' => 2,
            'category_id' => 1,
        ]);
        Project::factory()->create([
            'name' => 'Aplikasi Indomaret Kasir',
            'description' => 'Kasir Pembayaran',
            'budget' => 100000,
            'user_id' => 4,
            'category_id' => 4,
        ]);        Project::factory()->create([
            'name' => 'Iklan Fanta',
            'description' => 'Promosi Fanta',
            'budget' => 100000,
            'user_id' => 5,
            'category_id' => 2,
        ]);
    }
}
