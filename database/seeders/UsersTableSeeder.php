<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Hasan Ekinci",
            'email' => "s1123069@student.hsleiden.nl",
            'password' => bcrypt('laravel123'),
            'role' => 'Admin',
        ]);

        DB::table('users')->insert([
            'name' => "Jeroen Rijsdijk",
            'email' => "jeroen@hsleiden.nl",
            'password' => bcrypt('time2share'),
            'role' => 'Gebruiker',
        ]);
    }
}
