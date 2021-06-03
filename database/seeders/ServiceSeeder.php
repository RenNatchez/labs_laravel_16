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
            ['titre' => 'GET IN THE LAB',
            'description' =>'Lorem ipsum dolor sit amet, consecteturfdfijisqhdihdsid dfijdfjhgidsfuidsqiudfspidsfip^',
            'icone_id' =>4,
            'created_at'=>now()],
            // 2
            ['titre' => 'PROJECTS ONLINE',
            'description' =>'Lorem ipsum dolor sit amet, consecteturfdfijisqhdihdsid dfijdfjhgidsfuidsqiudfspidsfip^',
            'icone_id' =>5,
            'created_at'=>now()],
            // 3
            ['titre' => 'SMART MARKETING',
            'description' =>'Lorem ipsum dolor sit amet, consecteturfdfijisqhdihdsid dfijdfjhgidsfuidsqiudfspidsfip^',
            'icone_id' =>6,
            'created_at'=>now()],
            // 4
            ['titre' => 'Captain  Azpi',
            'description' =>'Lorem ipsum dolor sit amet, consecteturfdfijisqhdihdsid dfijdfjhgidsfuidsqiudfspidsfip^',
            'icone_id' =>1,
            'created_at'=>now()],
            // 5
            ['titre' => 'Chelsea 2021',
            'description' =>'Lorem ipsum dolor sit amet, consecteturfdfijisqhdihdsid dfijdfjhgidsfuidsqiudfspidsfip^',
            'icone_id' =>2,
            'created_at'=>now()],
        ]);
    }
}
