<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            // 1
            ['miniature' => 'test.jpg',
            'video' => 'https://www.youtube.com/watch?v=WNw7xwmR9Sg',],
        ]);
    }
}
