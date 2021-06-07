<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            // 1
            ['nom' => 'Prendre contact',
            'created_at'=>now()],
            // 2
            ['nom' => 'Demande  de devis',
            'created_at'=>now()],
            // 3
            ['nom' =>"Demander de l'aide a  un admin",
            'created_at'=>now()]
            ]);
        }
    }
