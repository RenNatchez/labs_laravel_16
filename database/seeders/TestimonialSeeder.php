<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            // 1
            ['nom' => 'burg',
            'prenom' => 'Ham',
            'poste' => 'CEO',
            'photo' => '01',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 2
            ['nom' => 'burg',
            'prenom' => 'Ham',
            'poste' => 'CEO',
            'photo' => '01',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 1
            ['nom' => 'burg',
            'prenom' => 'Ham',
            'poste' => 'CEO',
            'photo' => '01',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 1
            ['nom' => 'burg',
            'prenom' => 'Ham',
            'poste' => 'CEO',
            'photo' => '01',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 1
            ['nom' => 'burg',
            'prenom' => 'Ham',
            'poste' => 'CEO',
            'photo' => '01',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],

        ]);
    }
}
