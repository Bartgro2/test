<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Import the DB facade

class ReceptenSeeder extends Seeder
{
    public function run()
    {
        // Define your data to be seeded
        $recepten = [
            ['name' => 'Broodje Kip', 'description' => 'Description for Recept 1'],
            ['name' => 'Salade Vis', 'description' => 'Description for Recept 2'],
            ['name' => 'Taco', 'description' => 'Description for Recept 3'],
            // Add more data as needed
        ];

        // Insert the data into the "recepten" table
        DB::table('recipes')->insert($recepten);
    }
}

