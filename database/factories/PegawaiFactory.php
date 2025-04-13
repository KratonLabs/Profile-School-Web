<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{

    public function definition(): array
    {
        static $userIndex = 1; // untuk user1.jpg sampai user10.jpg

        // Random antara 1 = Guru, 2 = Staff
        $jabatanId = $this->faker->randomElement([1, 2]);

        // Jika Guru, assign mata pelajaran 1–10, kalau Staff, set null
        $mataPelajaranId = $jabatanId === 1 ? $this->faker->numberBetween(1, 7) : null;

        return [
            'jabatan_id' => $jabatanId,
            'mata_pelajaran_id' => $mataPelajaranId,
            'nama' => $this->faker->name(),
            'gambar' => 'user' . $userIndex++ . '.jpg',
            'nip' => $this->faker->numerify('19########20#########'),
        ];
    }
}
