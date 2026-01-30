<?php
require_once 'vendor/autoload.php';

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Get categories from database
$categories = DB::table('categories')->select('id', 'name', 'status')->get();

echo "Categories in database:\n";
foreach ($categories as $category) {
    echo "ID: {$category->id}, Name: {$category->name}, Status: {$category->status}\n";
}