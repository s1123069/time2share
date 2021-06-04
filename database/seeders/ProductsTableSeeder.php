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
            'name' => 'biebpas',
            'kind_of_product' => 'Overig',
            'description' => 'Dit is mijn biebpas om boeken mee te lenen in de biebliotheek.',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Rugzak',
            'kind_of_product' => 'Overig',
            'description' => 'Mijn oude rugzak waar ik mee naar school ging.',
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
            'name' => 'Schroevendraaier',
            'kind_of_product' => 'Gereedschap',
            'description' => 'Voor het klussen thuis',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 1,
        ]);

        DB::table('products')->insert([
            'name' => 'Ninetendo Switch',
            'kind_of_product' => 'Elektronica',
            'description' => 'Mijn console die ik voor één of andere reden uitleen.',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 2,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'Bal',
            'kind_of_product' => 'Sport',
            'description' => 'Ga naar het pleintje en dan kun je hiermee voetballen.',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);

        DB::table('products')->insert([
            'name' => 'fiets',
            'kind_of_product' => 'Hobby',
            'description' => 'Een fiets waarven het echterwiel een beetje scheef is.',
            'image_name' => "default.jpg",
            'image_path' => "/img/default.jpg",
            'borrow_days' => 10,
            'owner' => 2,
        ]);


    }
}
