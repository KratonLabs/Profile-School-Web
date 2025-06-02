<?php

namespace Database\Seeders;

use App\Models\CarouselEskul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarouselEskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Pramuka
        CarouselEskul::create([
            'eskul_id' => 1,
            'gambar' => 'Pramuka.png',
        ]);

        //Paskibra
        CarouselEskul::create([
            'eskul_id' => 2,
            'gambar' => 'Paskibra.png',
        ]);


        //Futsal
        CarouselEskul::create([
            'eskul_id' => 3,
            'gambar' => 'futsal.png',
        ]);


        //Volley
        CarouselEskul::create([
            'eskul_id' => 4,
            'gambar' => 'volley.jpg',
        ]);

    }
}
