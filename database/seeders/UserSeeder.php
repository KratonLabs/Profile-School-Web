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
                'name' => 'User Satu',
                'email' => 'user1@example.com',
            ],
            [
                'name' => 'User Dua',
                'email' => 'user2@example.com',
            ],
            [
                'name' => 'User Tiga',
                'email' => 'user3@example.com',
            ],
            [
                'name' => 'User Empat',
                'email' => 'user4@example.com',
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
