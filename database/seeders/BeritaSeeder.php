<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = ['Prestasi', 'Pengumuman', 'Kegiatan'];

        for ($i = 0; $i < 10; $i++) {
            $kategori = $kategoris[array_rand($kategoris)];
            DB::table('beritas')->insert([
                'judul' => Str::title(Str::words(fake()->sentence(), rand(3, 6), '')),
                'kategori' => $kategori,
                'deskripsi' => fake()->paragraphs(rand(2, 4), true), // gabungkan jadi satu string
                'gambar' => $kategori . '.jpg',
                'dilihat' => rand(0, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
