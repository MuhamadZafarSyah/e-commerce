<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        Category::create([
            'category_name' => 'sneakers',
            'slug' => 'sneakers'
        ]);
        Category::create([
            'category_name' => 'shirt',
            'slug' => 'shirt'
        ]);
        Category::create([
            'category_name' => 'hoodie',
            'slug' => 'hoodie'
        ]);

        Product::factory(15)->create();
    }
}
