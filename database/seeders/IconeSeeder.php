<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            // 1
            ['nom' => 'Graphique',
            'class' =>'fas fa-chart-line',
            'created_at'=>now()],

            // 2
            ['nom' => 'Justice',
            'class' =>'fas fa-balance-scale',
            'created_at'=>now()],

            // 3
            ['nom' => 'Livre',
            'class' =>'fas fa-book',
            'created_at'=>now()],

            // 4
            ['nom' => 'Pièce',
            'class' =>'fas fa-coin',
            'created_at'=>now()],

            // 5
            ['nom' => 'Cœur',
            'class' =>'fas fa-heart',
            'created_at'=>now()],

            // 6
            ['nom' => 'Ici',
            'class' =>'fas fa-map-marker-alt',
            'created_at'=>now()],

            // 7
            ['nom' => 'Camera',
            'class' =>'fas fa-camera',
            'created_at'=>now()],

            // 8
            ['nom' => 'Personne',
            'class' =>'fas fa-user',
            'created_at'=>now()],

            // 9
            ['nom' => 'Chat',
            'class' =>'fas fa-cat',
            'created_at'=>now()],

            // 10
            ['nom' => 'Dragon',
            'class' =>'fas fa-dragon',
            'created_at'=>now()],

        ]);

    }
}
