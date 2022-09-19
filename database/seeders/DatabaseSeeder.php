<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'franco@computersandmedias.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'admin' => true,
        ]);

        \App\Models\User::create([
            'name' => 'Client',
            'last_name' => 'User',
            'email' => 'adrgabtu@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
            'admin' => false
        ]);

        \App\Models\Category::create([
            'name' => 'Online Courses',
            'slug' => 'online-courses',
            'description' => 'Online Courses'
        ]);     
        
        $this->call([
            ProductSeeder::class
        ]);
    }
}
