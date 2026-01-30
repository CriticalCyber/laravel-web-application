<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class CreateNewArrivalCategory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:create-new-arrival';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create New Arrival category if it does not exist';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $category = Category::where('name', 'New Arrival')->first();

        if ($category) {
            $this->info("Category 'New Arrival' already exists with ID: " . $category->id);
        } else {
            $this->info("Category 'New Arrival' does not exist. Creating it now...");
            // Create category without slug or description
            $newCategory = Category::create([
                'name' => 'New Arrival'
            ]);
            $this->info("Created category 'New Arrival' with ID: " . $newCategory->id);
        }

        return 0;
    }
}