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

        DB::table('products')->insert([
            'name' => 'Toetsenbord',
            'kind_of_product' => 'Kantoor',
            'description' => 'Mooi toetsenbord',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Pan',
            'kind_of_product' => 'Keuken',
            'description' => 'Voor het koken',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Tent',
            'kind_of_product' => 'Reizen',
            'description' => 'Prettig bij het kamperen',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Hamer',
            'kind_of_product' => 'Gereedschap',
            'description' => 'Voor het timmeren',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Drilboor',
            'kind_of_product' => 'Gereedschap',
            'description' => 'Voor drillers met die shank',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 1,
        ]);
    }
}
