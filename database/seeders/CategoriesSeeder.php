<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'UI/UX',
        ]);
        Category::create([
            'name' => 'DIGMAR',
        ]);
        Category::create([
            'name' => 'WEB',
        ]);
        Category::create([
            'name' => 'MOBILE',
        ]);
    }
}
