<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyisipkan data menggunakan metode create
        Jabatan::create([
            'nama' => 'Guru',
            'deskripsi' => 'Jabatan untuk tenaga pengajar di sekolah.'
        ]);

        Jabatan::create([
            'nama' => 'Staff',
            'deskripsi' => 'Jabatan untuk tenaga administrasi dan pendukung.'
        ]);
    }
}
