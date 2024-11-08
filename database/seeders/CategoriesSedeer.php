<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'name' => 'UI/UX',
        ]);
        Category::factory()->create([
            'name' => 'DIGMAR',
        ]);
        Category::factory()->create([
            'name' => 'WEB',
        ]);
        Category::factory()->create([
            'name' => 'MOBILE',
        ]);
    }
}
