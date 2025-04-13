<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\JabatanSeeder;
use Database\Seeders\MataPelajaranSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JabatanSeeder::class,
            MataPelajaranSeeder::class,
            PegawaiSeeder::class,
            JurusanSeeder::class,
        ]);
    }
}
