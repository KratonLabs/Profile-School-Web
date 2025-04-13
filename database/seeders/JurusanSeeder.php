<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::create([
            'nama' => 'Ilmu Pengetahuan Alam (IPA)',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, eveniet.',
            'gambar' => 'Ilmu Pengetahuan Alam.jpeg'
        ]);
    
        Jurusan::create([
            'nama' => 'Ilmu Pengetahuan Sosial',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, consequatur.',
            'gambar' => 'Ilmu Pengetahuan Sosial.jpg'
        ]);
        Jurusan::create([
            'nama' => 'Matematika dan Komputer',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, consequatur.',
            'gambar' => 'Matematika dan Komputer.jpg'
        ]);
    }
}
