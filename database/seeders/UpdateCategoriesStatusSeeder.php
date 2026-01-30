<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateCategoriesStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Update all existing categories to have 'active' status
        DB::table('categories')
            ->whereNull('status')
            ->update(['status' => 'active']);
    }
}