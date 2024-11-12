<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listData = [
            [
                 'title' => "CLOCKER",
            'image' => "bg3.jpeg",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, quibusdam! Corporis in soluta fuga molestiae incidunt odio, quod quae illo!"
            ]
        ];

        $publicPath = public_path("assets_landing/images/");
        $uploadPath = "about/";

        foreach ($listData as $data) {
            $sourcePath = $publicPath . $data["image"];
            $destinationPath = $uploadPath . $data["image"];

            if (Storage::disk('public')->put($destinationPath, file_get_contents($sourcePath))) {
                About::create([
                    "title" => $data["title"],
                    "description" => $data["description"],
                    "image" => $destinationPath,
                ]);
            }
        }
    }
}
