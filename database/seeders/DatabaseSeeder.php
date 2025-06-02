<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BeritaSeeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\JurusanSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\FasilitasSeeder;
use Database\Seeders\MataPelajaranSeeder;
use Database\Seeders\EkstrakulikulerSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            JabatanSeeder::class,
            MataPelajaranSeeder::class,
            PegawaiSeeder::class,
            JurusanSeeder::class,
            EkstrakulikulerSeeder::class,
            FasilitasSeeder::class,
            BeritaSeeder::class,
            CarouselEskulSeeder::class,
        ]);
    }
}
