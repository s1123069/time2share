<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'name' => "default.jpg",
            'path' => "./img/default.jpg",
        ]);
    }
}
