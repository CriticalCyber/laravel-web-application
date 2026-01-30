<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;

class UpdateProductImageUrls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:update-image-urls';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update image URLs for all products';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Updating image URLs for all products...');

        $products = Product::whereNotNull('image_path')->get();

        $bar = $this->output->createProgressBar($products->count());
        $bar->start();

        foreach ($products as $product) {
            $product->image_url = route('storage.serve', ['path' => $product->image_path]);
            $product->save();
            $bar->advance();
        }

        $bar->finish();

        $this->info("\nImage URLs updated successfully for {$products->count()} products.");

        return 0;
    }
}