<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            // 1
            ['titre' => 'serv 1', 
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>4,
            'created_at'=>now()],
            // 2
            ['titre' => 'serv 2',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>5,
            'created_at'=>now()],
            // 3
            ['titre' => 'serv 3',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>6,
            'created_at'=>now()],
            // 4
            ['titre' => 'serv 4',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>1,
            'created_at'=>now()],
            // 5
            ['titre' => 'serv 5',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>2,
            'created_at'=>now()],
            // 6
            ['titre' => 'serv 6',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>4,
            'created_at'=>now()],
            // 7
            ['titre' => 'serv 7',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>5,
            'created_at'=>now()],
            // 8
            ['titre' => 'serv 8',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>6,
            'created_at'=>now()],
            // 9
            ['titre' => 'serv 9',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>1,
            'created_at'=>now()],
            // 10
            ['titre' => 'serv 10',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>2,
            'created_at'=>now()],
            // 11
            ['titre' => 'serv 11',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>4,
            'created_at'=>now()],
            // 12
            ['titre' => 'serv 12',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>5,
            'created_at'=>now()],
            // 13
            ['titre' => 'serv 13',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>6,
            'created_at'=>now()],
            // 14
            ['titre' => 'serv 14',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>1,
            'created_at'=>now()],
            // 15
            ['titre' => 'serv 15',
            'description' =>'Lorem ipsum dolor sit amet, consectetu rfdfi jisqhdihd sid dfijdfjhgi dsfuidsqi udfspids ip^',
            'icone_id' =>2,
            'created_at'=>now()],

        ]);
    }
}
