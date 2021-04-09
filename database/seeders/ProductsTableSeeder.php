<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Productnaam',
            'kind_of_product' => 'Overig',
            'description' => 'Hier komt de beschrijving.',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Jeroen',
            'kind_of_product' => 'Overig',
            'description' => 'van Jeroen',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);
    }
}
