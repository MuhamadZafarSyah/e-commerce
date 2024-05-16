<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'full_name' => 'admin',
            'username' => 'admin',
            'address' => 'jalan kapuk 2',
            'email' => 'zafarsyah@gmail.com',
            'phone' => '08123456789',
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);

        User::create([
            'full_name' => 'user',
            'username' => 'user',
            'address' => 'jalan cipinang',
            'email' => 'user@gmail.com',
            'phone' => '081223456789',
            'role' => 'user',
            'password' => bcrypt('user'),
        ]);
    }
}
