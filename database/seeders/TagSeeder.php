<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            // 1
            ['nom' => 'design'],
            // 2
            ['nom' => 'web'],
            // 3
            ['nom' => 'corporate'],
            // 4
            ['nom' => 'identity'],
            // 5
            ['nom' => 'video'],
        ]);
    }
}
