<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousels')->insert([
            // 1
            ['image' => '01.jpg',
            'texte' => 'Get your freebie template now!',
            'start' =>true,
            'created_at'=>now()],

            // 2
            ['image' => '02.jpg',
            'texte' => 'template now!',
            'start' =>false,
            'created_at'=>now()],
        ]);

    }
}
