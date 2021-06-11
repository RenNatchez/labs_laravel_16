<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 1
            [
                'nom' => 'Natchez',
                'prenom' => 'Renders',
                'description' => 'hello',
                'validate' => false,
                'email' => 'natchez@hotmail.com',
                'photo' => '1.png',
                'poste_id' => 1,
                'role_id' => 1,
                'password' => Hash::make('password'),
                'created_at'=>now()
            ],
            // 2
            [
                'nom' => 'Web Master',
                'prenom' => 'Labs',
                'description' => 'hello',
                'validate' => false,
                'email' => 'webmaster@hotmail.com',
                'photo' => '1.png',
                'poste_id' => 5,
                'role_id' => 2,
                'password' => Hash::make('password'),
                'created_at'=>now()
            ],
            // 3
            [
                'nom' => 'Rédacteur',
                'prenom' => 'Labs',
                'description' => 'hello',
                'validate' => false,
                'email' => 'redacteur@hotmail.com',
                'photo' => '1.png',
                'poste_id' => 5,
                'role_id' => 3,
                'password' => Hash::make('password'),
                'created_at'=>now()
            ],
            // 4
            [
                'nom' => 'Membre',
                'prenom' => 'Labs',
                'description' => 'hello',
                'validate' => false,
                'email' => 'membre@hotmail.com',
                'photo' => '1.png',
                'poste_id' => 5,
                'role_id' => 4,
                'password' => Hash::make('password'),
                'created_at'=>now()
            ],
        ]);
    }
}
