<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            // 1
            ['nom' => 'CEO',
            'created_at'=>now()],
            // 2
            ['nom' => 'Directeur Artistique',
            'created_at'=>now()],
            // 3
            ['nom' =>"Employé",
            'created_at'=>now()],
            // 4
            ['nom' =>"Développeur Web",
            'created_at'=>now()],
            // 5
            ['nom' =>"Autre",
            'created_at'=>now()],
        ]);
    }
}
