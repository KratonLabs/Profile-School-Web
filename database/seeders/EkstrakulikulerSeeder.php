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

        ]);
        Ekstrakurikuler::create([
            'pegawai_id' => 4,
            'nama' => 'Paskibra',
            'kategori' => 'Kenegaraan',
            'deskripsi' => 'Paskibra (Pasukan Pengibar Bendera) mengajarkan kedisiplinan, kerja sama tim, kemandirian, dan cinta alam. Kegiatan meliputi latihan baris-berbaris, tali-temali, kegiatan lapangan, hingga perkemahan.',
            'tahun_berdiri' => '2013',
            'jumlah_anggota' => 35,


        ]);
        Ekstrakurikuler::create([
            'nama' => 'Futsal',
            'kategori' => 'Olahraga',
            'deskripsi' => 'Olahraga ini banyak digemari karena menyenangkan, kompetitif, dan bisa membawa sekolah ke ajang turnamen antar sekolah. Futsal mengembangkan ketangkasan, stamina, dan sportivitas.',
            'tahun_berdiri' => '2010',
            'jumlah_anggota' => 30,

        ]);
        Ekstrakurikuler::create([
            'pegawai_id' => 8,
            'nama' => 'Volley',
            'kategori' => 'Keagamaan',
            'deskripsi' => 'Olahraga ini banyak digemari karena menyenangkan, kompetitif, dan bisa membawa sekolah ke ajang turnamen antar sekolah. Volley mengembangkan ketangkasan, stamina, dan sportivitas.',
            'tahun_berdiri' => '2009',
            'jumlah_anggota' => 150,
        ]);
    }
}
