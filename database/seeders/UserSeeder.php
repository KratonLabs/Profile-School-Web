<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data user statis (1 admin + 4 user biasa)
        $users = [
            [
                'name' => 'Admin Utama',
                'email' => 'admin@gmail.com',
            ],  
            [
                'name' => 'Kepala Sekolah',
                'email' => 'kepalasekolah@example.com',
            ],
            [
                'name' => 'osis',
                'email' => 'osis@example.com',
            ],  
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
                'gambar' => 'Admin.jpg',
            ]);
        }
    }
}
