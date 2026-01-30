<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Bedsheets',
                'description' => 'Luxurious bedsheets for a comfortable sleep',
                'status' => 'active'
            ],
            [
                'name' => 'Table Runners',
                'description' => 'Elegant table runners for your dining table',
                'status' => 'active'
            ],
            [
                'name' => 'Rugs',
                'description' => 'Beautiful rugs to enhance your living space',
                'status' => 'active'
            ],
            [
                'name' => 'Cushions',
                'description' => 'Comfortable and stylish cushions for your home',
                'status' => 'active'
            ],
            [
                'name' => 'New Arrival',
                'description' => 'Recently added products to our collection',
                'status' => 'active'
            ]
        ];

        foreach ($categories as $category) {
            // Only create the category if it doesn't already exist
            Category::firstOrCreate(
                ['name' => $category['name']],
                $category
            );
        }
    }
}