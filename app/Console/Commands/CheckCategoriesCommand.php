<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckCategoriesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'categories:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check what categories exist in the database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Current categories in database:');
        
        $categories = DB::table('categories')->get();
        
        foreach ($categories as $category) {
            $this->line("- ID: {$category->id}, Name: {$category->name}");
            
            // Count products in each category
            $productCount = DB::table('products')->where('category_id', $category->id)->count();
            $this->line("  Products in this category: {$productCount}");
        }
        
        $this->info("\nTotal categories: " . count($categories));
        
        return 0;
    }
}