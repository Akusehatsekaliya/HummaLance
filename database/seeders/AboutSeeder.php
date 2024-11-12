<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => "CLOCKER",
            'image' => "images/bg2.jpeg",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quibusdam! Corporis in soluta fuga molestiae incidunt odio, quod quae illo!"
        ]);
    }
}
