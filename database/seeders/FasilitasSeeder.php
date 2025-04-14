<?php

namespace Database\Seeders;

use App\Models\Fasilitas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fasilitas::create([
            'nama' => 'Laboratorium IPA',
            'deskripsi' => 'Tempat untuk melakukan percobaan sains, seperti fisika, kimia, dan biologi. Fasilitas ini mendukung pembelajaran berbasis praktik agar siswa lebih memahami konsep ilmiah secara langsung.',
            'jenis' => 'Akademik',
            'gambar' => 'Laboratorium IPA.jpg'
        ]);
        Fasilitas::create([
            'nama' => 'Lapangan Olahraga',
            'deskripsi' => 'Digunakan untuk kegiatan fisik seperti olahraga rutin, upacara, dan lomba antar kelas. Fasilitas ini penting untuk menjaga kebugaran dan melatih kerja sama antar siswa.',
            'jenis' => 'Non-Akademik',
            'gambar' => 'Lapangan Olahraga.jpg'
        ]);
        Fasilitas::create([
            'nama' => 'Ruang OSIS',
            'deskripsi' => 'Merupakan pusat kegiatan organisasi siswa di sekolah. Digunakan untuk rapat, perencanaan event, dan pengarsipan dokumen kegiatan OSIS dan ekstrakurikuler.',
            'jenis' => 'Keorganisasian',
            'gambar' => 'Ruang OSIS.jpeg'
        ]);
        Fasilitas::create([
            'nama' => 'Toilet',
            'deskripsi' => 'Fasilitas dasar yang sangat penting untuk kenyamanan dan kesehatan warga sekolah. Biasanya disediakan terpisah antara siswa laki-laki dan perempuan serta untuk guru.',
            'jenis' => 'Umum',
            'gambar' => 'Toilet.jpg'
        ]);
    }
}
