<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        DB::table('statues')->insert([[
            'name' => "La statue de la liberté",
            'date' => "1886",
            'country' => "France",
            'price' => "0",
            'author' => "Auguste Bartholdi"
        ],[
            'name' => "Le christ redempteur",
            'date' => "1926",
            'country' => "Bresil",
            'price' => "0",
            'author' => "Paul Landowski, Carlos Oswald"
        ],[
            'name' => "la venus de milo",
            'date' => "150-130 av JC",
            'country' => "France",
            'price' => "0",
            'author' => "Unknow"
        ]]);
        return;
    }
}
