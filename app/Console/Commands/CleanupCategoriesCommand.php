<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CleanupCategoriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cleanup incorrect categories and ensure only correct categories exist';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Starting category cleanup...');
        
        // Define the correct categories
        $correctCategories = [
            ['name' => 'Bedsheets'],
            ['name' => 'Table Runners'],
            ['name' => 'Rugs'],
            ['name' => 'Cushions']
        ];
        
        // Fetch all categories
        $categories = DB::table('categories')->get();
        
        $this->info('Current categories in database:');
        $categoriesToDelete = [];
        $categoriesToKeep = [];
        
        foreach ($categories as $category) {
            $isCorrectCategory = false;
            foreach ($correctCategories as $correctCategory) {
                if (strtolower($category->name) === strtolower($correctCategory['name'])) {
                    $isCorrectCategory = true;
                    $categoriesToKeep[] = $category;
                    $this->line("- Keeping: ID {$category->id}, Name: {$category->name}");
                    break;
                }
            }
            
            if (!$isCorrectCategory) {
                $categoriesToDelete[] = $category;
                $this->line("- Marking for deletion: ID {$category->id}, Name: {$category->name}");
            }
        }
        
        // Delete incorrect categories
        if (!empty($categoriesToDelete)) {
            $this->info("\nDeleting incorrect categories...");
            foreach ($categoriesToDelete as $category) {
                // First, set category_id to NULL for products in this category
                $updatedProducts = DB::table('products')
                    ->where('category_id', $category->id)
                    ->update(['category_id' => null]);
                
                $this->line("Updated {$updatedProducts} products to have NULL category_id (previously in category '{$category->name}')");
                
                // Now delete the category
                DB::table('categories')->where('id', $category->id)->delete();
                $this->line("Deleted category: {$category->name}");
            }
        }
        
        // Ensure correct categories exist
        $this->info("\nEnsuring correct categories exist...");
        foreach ($correctCategories as $correctCategory) {
            $existingCategory = DB::table('categories')
                ->where('name', $correctCategory['name'])
                ->first();
            
            if (!$existingCategory) {
                // Create category with all required fields
                $categoryId = DB::table('categories')->insertGetId([
                    'name' => $correctCategory['name'],
                    'slug' => Str::slug($correctCategory['name']),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $this->line("Created category: {$correctCategory['name']} (ID: {$categoryId})");
            } else {
                $this->line("Category already exists: {$correctCategory['name']} (ID: {$existingCategory->id})");
            }
        }
        
        $this->info("\nCategory cleanup completed!");
        
        // Show final categories
        $finalCategories = DB::table('categories')->get();
        $this->info("\nFinal categories in database:");
        foreach ($finalCategories as $category) {
            $productCount = DB::table('products')->where('category_id', $category->id)->count();
            $this->line("- ID: {$category->id}, Name: {$category->name}, Products: {$productCount}");
        }
        
        return 0;
    }
}