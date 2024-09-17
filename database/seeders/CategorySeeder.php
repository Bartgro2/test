<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define categories data
        $categories = [
            ['name' => 'Category 1'],
            ['name' => 'Category 2'],
            // Add more categories as needed
        ];

        // Insert categories into the database
        Category::insert($categories);
    }
}

