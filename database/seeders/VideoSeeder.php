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
            ['miniature' => 'kai.png',
            'video' => '"https://youtu.be/n9l73QmBH2s?t=78',],
        ]);
    }
}
