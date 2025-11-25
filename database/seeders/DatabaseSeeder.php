<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create Admin User
        User::create([
            'name' => 'Admin Baru',
            'email' => 'admin_new@sistemantrian.com',
            'password' => Hash::make('Admin@1234'),
            'role' => 'admin',
            'email_verified_at' => now(),
        ]);

        // Create Operator User
        User::create([
            'name' => 'Operator',
            'email' => 'operator@sistemantrian.com',
            'password' => Hash::make('Operator@1234'),
            'role' => 'operator',
            'email_verified_at' => now(),
        ]);
    }
}
