<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            // 1
            ['nom' => 'Vestibulum maximus'],
            // 2
            ['nom' => 'Tellus ut nulla'],
            // 3
            ['nom' => 'Orci qual accusan'],
            // 4
            ['nom' => 'etiam egestas viverra'],
        ]);
    }
}
