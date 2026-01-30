<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class RemoveDuplicateCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Remove duplicate categories, keeping only the first occurrence of each name
        DB::statement("
            DELETE c1 FROM categories c1
            INNER JOIN categories c2 
            WHERE c1.id > c2.id AND c1.name = c2.name
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // We can't restore deleted duplicates
    }
}