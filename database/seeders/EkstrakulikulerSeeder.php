<?php

namespace Database\Seeders;

use App\Models\Ekstrakurikuler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EkstrakulikulerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ekstrakurikuler::create([
            'pegawai_id' => 1,
            'nama' => 'Pramuka',
            'kategori' => 'Kenegaraan',
            'deskripsi' => 'Pramuka (Praja Muda Karana) mengajarkan kedisiplinan, kerja sama tim, kemandirian, dan cinta alam. Kegiatan meliputi latihan baris-berbaris, tali-temali, kegiatan lapangan, hingga perkemahan.',
            'tahun_berdiri' => '2011',
            'jumlah_anggota' => 200,
            'gambar' => 'Pramuka.jpg'
        ]);
        Ekstrakurikuler::create([
            'pegawai_id' => 4,
            'nama' => 'Paskibra',
            'kategori' => 'Kenegaraan',
            'deskripsi' => 'Paskibra (Pasukan Pengibar Bendera) mengajarkan kedisiplinan, kerja sama tim, kemandirian, dan cinta alam. Kegiatan meliputi latihan baris-berbaris, tali-temali, kegiatan lapangan, hingga perkemahan.',
            'tahun_berdiri' => '2013',
            'jumlah_anggota' => 35,
            'gambar' => 'Paskibra.jpeg'
        ]);
        Ekstrakurikuler::create([
            'nama' => 'Basket',
            'kategori' => 'Olahraga',
            'deskripsi' => 'Olahraga ini banyak digemari karena menyenangkan, kompetitif, dan bisa membawa sekolah ke ajang turnamen antar sekolah. Basket mengembangkan ketangkasan, stamina, dan sportivitas.',
            'tahun_berdiri' => '2010',
            'jumlah_anggota' => 30,
            'gambar' => 'Basket.jpg'
        ]);
        Ekstrakurikuler::create([
            'pegawai_id' => 8,
            'nama' => 'Rohis',
            'kategori' => 'Keagamaan',
            'deskripsi' => 'Ekskul keagamaan yang fokus pada pembinaan karakter dan spiritualitas siswa muslim. Kegiatannya meliputi kajian, pelatihan dai, tahfidz, hingga kegiatan sosial.',
            'tahun_berdiri' => '2009',
            'jumlah_anggota' => 150,
            'gambar' => 'Rohis.jpg'
        ]);
        Ekstrakurikuler::create([
            'nama' => 'Jurnalistik',
            'kategori' => 'Sains & Teknologi',
            'deskripsi' => 'Cocok bagi siswa yang suka menulis, desain, atau fotografi. Ekskul ini mengelola media informasi sekolah, seperti majalah dinding (mading), buletin, atau konten digital.',
            'tahun_berdiri' => '2015',
            'jumlah_anggota' => 50,
            'gambar' => 'Jurnalistik.jpg'
        ]);
        Ekstrakurikuler::create([
            'pegawai_id' => 3,
            'nama' => 'OSIS',
            'kategori' => 'Kenegaraan',
            'deskripsi' => 'Organisasi ini berfungsi sebagai wadah bagi siswa',
            'tahun_berdiri' => '2005',
            'jumlah_anggota' => '50',
            'gambar' => 'Osis.jpg'
        ]);
    }
}
