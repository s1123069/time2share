<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KindOfProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kind_of_products_array = ["Keuken", "Gereedschap", "Kantoor", "Elektronica", "Hobby", "Reizen", "Sport"];

        foreach($kind_of_products_array as $kind_of_products){
            DB::table('kind_of_products')->insert([
                'kind_of_product' => $kind_of_products
            ]);
        }
    }
}
