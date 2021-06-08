<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GooglemapsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('googlemaps')->insert([
            // 1
            ['longitude' => '21.29418868067308',
            'latitude' => '-157.8701990676479',],
        ]);

    }
}
