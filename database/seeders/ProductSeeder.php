<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name_of_product' =>"Product 1",
            'description_of_product' => 'Product 1 description',
            'image_of_product' => 'Image 1',
            'categories_id' => 1,
        ]);
    }
}
