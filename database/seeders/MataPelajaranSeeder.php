<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MataPelajaran::create([
            'nama' => 'Bahasa Indonesia',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, eveniet.'
        ]);
    
        MataPelajaran::create([
            'nama' => 'Bahasa Inggris',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, consequatur.'
        ]);
        MataPelajaran::create([
            'nama' => 'Informatika',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, ducimus?.'
        ]);
        MataPelajaran::create([
            'nama' => 'Matematika',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, dolores!.'
        ]);
        MataPelajaran::create([
            'nama' => 'Fisika',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, reiciendis?.'
        ]);
        MataPelajaran::create([
            'nama' => 'Kimia',
            'deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, ad.'
        ]);
        MataPelajaran::create([
            'nama' => 'Biologi',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus, voluptatibus?.'
        ]);
    }
}
