<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Cryptocurrency Introduction', 
            'slug' => Str::slug('Cryptocurrency Introduction'), 
            'description' => 'Cryptocurrency Introduction', 
            'price' => 142,
            'category_id' => 1 
        ]);

        Product::create([
            'name' => 'Introduction to Blockchain', 
            'slug' => Str::slug('Introduction to Blockchain'), 
            'description' => 'Introduction to Blockchain', 
            'price' => 650,
            'category_id' => 1 
        ]);

        Product::create([
            'name' => 'Introduction to Crypto Wallet', 
            'slug' => Str::slug('Introduction to Crypto Wallet'), 
            'description' => 'Introduction to Crypto Wallet', 
            'price' => 1425,
            'category_id' => 1 
        ]);

        Product::create([
            'name' => 'Crypto Platforms', 
            'slug' => Str::slug('Crypto Platforms'), 
            'description' => 'Crypto Platforms', 
            'price' => 1900,
            'category_id' => 1 
        ]);

        Product::create([
            'name' => 'Cryptocurrency Inventing', 
            'slug' => Str::slug('Cryptocurrency Inventing'), 
            'description' => 'Cryptocurrency Inventing', 
            'price' => 2850,
            'category_id' => 1 
        ]);

        Product::create([
            'name' => 'Leadger and advance investment', 
            'slug' => Str::slug('Leadger and advance investment'), 
            'description' => 'Leadger and advance investment', 
            'price' => 3800,
            'category_id' => 1 
        ]);
    }
}
