<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class DeleteAllProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Delete all products from the products table
        DB::table('products')->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Nothing to rollback
    }
}