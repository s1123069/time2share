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
            'name' => 'pen',
            'kind_of_product' => 'Kantoor',
            'description' => 'Een goede blauwe pen',
            'image_name' => "default.jpg",
            'image_path' => "./img/default.jpg",
            'borrow_days' => 10,
            'owner' => 1,
        ]);
    }
}
