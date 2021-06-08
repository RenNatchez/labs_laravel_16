<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            // 1
            ['nom' => 'Admin',
            'created_at'=>now()],
            // 2
            ['nom' => 'Web Master',
            'created_at'=>now()],
            // 3
            ['nom' =>"Rédacteur",
            'created_at'=>now()],
            // 4
            ['nom' =>"Membre",
            'created_at'=>now()],
        ]);
    }
}
