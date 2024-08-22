<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
      Run the database seeds.
     *
     */
    public function run(): void
    {
        Category::create([
            'category_name'=>"Category 2",
            'category_icon'=>'house'
        ]);
        Category::create([
            'category_name'=>"Category 3",
            'category_icon'=>'house'
        ]);
        Category::create([
            'category_name'=>"Category 4",
            'category_icon'=>'house'
        ]);
        Category::create([
            'category_name'=>"Category 5",
            'category_icon'=>'house'
        ]);
    }
}
