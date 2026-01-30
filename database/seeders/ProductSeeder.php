<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Get all categories
        $categories = Category::all();
        
        if ($categories->count() < 1) {
            echo "No categories found. Skipping product seeding.\n";
            return;
        }
        
        // Create sample products
        $products = [
            [
                'name' => 'Premium Bedsheet Set',
                'description' => 'Luxurious 100% cotton bedsheet set with elegant design',
                'price' => 89.99,
                'category_id' => $categories->firstWhere('name', 'Bedsheets')->id ?? $categories->first()->id,
                'is_featured' => true,
                'is_new_arrival' => true,
                'stock_quantity' => 10
            ],
            [
                'name' => 'Designer Cushion Covers',
                'description' => 'Set of 4 decorative cushion covers with modern patterns',
                'price' => 49.99,
                'category_id' => $categories->firstWhere('name', 'Cushions')->id ?? $categories->first()->id,
                'is_featured' => true,
                'is_new_arrival' => false,
                'stock_quantity' => 15
            ],
            [
                'name' => 'Handwoven Area Rug',
                'description' => 'Beautiful handwoven rug with traditional patterns',
                'price' => 199.99,
                'category_id' => $categories->firstWhere('name', 'Rugs')->id ?? $categories->first()->id,
                'is_featured' => false,
                'is_new_arrival' => true,
                'stock_quantity' => 5
            ],
            [
                'name' => 'Elegant Table Runner',
                'description' => 'Premium table runner for special occasions',
                'price' => 34.99,
                'category_id' => $categories->firstWhere('name', 'Table Runners')->id ?? $categories->first()->id,
                'is_featured' => true,
                'is_new_arrival' => false,
                'stock_quantity' => 20
            ],
            [
                'name' => 'Luxury Duvet Cover',
                'description' => 'Soft and comfortable duvet cover for a good night sleep',
                'price' => 79.99,
                'category_id' => $categories->firstWhere('name', 'Bedsheets')->id ?? $categories->first()->id,
                'is_featured' => false,
                'is_new_arrival' => true,
                'stock_quantity' => 8
            ]
        ];
        
        foreach ($products as $productData) {
            Product::create($productData);
        }
        
        echo "Created " . count($products) . " sample products.\n";
    }
}