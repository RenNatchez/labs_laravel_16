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
            ['nom' => 'Ham',
            'prenom' => 'Client 1',
            'poste' => 'CEO',
            'photo' => '01.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 2
            ['nom' => 'Ticipe',
            'prenom' => 'Client 2',
            'poste' => 'CEO',
            'photo' => '02.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 3
            ['nom' => 'Toric',
            'prenom' => 'Client 3',
            'poste' => 'CEO',
            'photo' => '03.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 4
            ['nom' => 'Versaire',
            'prenom' => 'Client 4',
            'poste' => 'CEO',
            'photo' => '02.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 5
            ['nom' => 'Harne',
            'prenom' => 'Client 5',
            'poste' => 'CEO',
            'photo' => '01.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
            // 6
            ['nom' => 'Otto',
            'prenom' => 'Client 6',
            'poste' => 'CEO',
            'photo' => '01.jpg',
            'avis' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor.',
            'created_at'=>now()],
        ]);
    }
}
