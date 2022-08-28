<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductImage;
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
            'name' => 'Introduction to Cryptocurrency', 
            'slug' => Str::slug('Introduction to Cryptocurrency'), 
            'description' => 'Introduction to Cryptocurrency', 
            'old_price' => 520,
            'price' => 475,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p1_i1_w624.png',
            'featured' => true,
            'product_id' => 1
        ]);

        Product::create([
            'name' => 'Introduction to Blockchain technology', 
            'slug' => Str::slug('Introduction to Blockchain technology'), 
            'description' => 'Introduction to Blockchain technology', 
            'old_price' => 1150,
            'price' => 950,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p2_i1_w620.png',
            'featured' => true,
            'product_id' => 2
        ]);

        Product::create([
            'name' => 'Introduction to Ledger', 
            'slug' => Str::slug('Introduction to Ledger'), 
            'description' => 'Introduction to Ledger', 
            'old_price' => 1675,
            'price' => 1425,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p3_i1_w620.png',
            'featured' => true,
            'product_id' => 3
        ]);

        Product::create([
            'name' => 'Introduction to Crypto Wallet', 
            'slug' => Str::slug('Introduction to Crypto Wallet'), 
            'description' => 'Introduction to Crypto Wallet', 
            'old_price' => 2150,
            'price' => 1900,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p4_i1_w639.png',
            'featured' => true,
            'product_id' => 4
        ]);

        Product::create([
            'name' => 'introduction to platforms', 
            'slug' => Str::slug('introduction to platforms'), 
            'description' => 'introduction to platforms', 
            'old_price' => 3050,
            'price' => 2850,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p5_i1_w639.png',
            'featured' => true,
            'product_id' => 5
        ]);        
        
        Product::create([
            'name' => 'Introduction to digital investment', 
            'slug' => Str::slug('Introduction to digital investment'), 
            'description' => 'Introduction to digital investment', 
            'old_price' => 4050,
            'price' => 3800,
            'category_id' => 1 
        ]);

        ProductImage::create([
            'image' => 's593478571628845156_p6_i3_w617.png',
            'featured' => true,
            'product_id' => 6
        ]);   
    }
}
