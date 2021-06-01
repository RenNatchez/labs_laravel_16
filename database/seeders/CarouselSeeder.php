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
            ['image' => 'test.jpg',
            'texte' => 'Get your freebie template now!',
            'start' =>true,
            'created_at'=>now()],

            // 2
            ['image' => 'doubletest.jpg',
            'texte' => 'Get your freebie template now!',
            'start' =>false,
            'created_at'=>now()],

            // 3
            ['image' => 'livre.pdf',
            'texte' => 'Get your freebie template now!',
            'start' =>false,
            'created_at'=>now()],
        ]);

    }
}
