<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contenus')->insert([
            // 1
            ['titre_1' => 'GET IN (THE LAB) AND DISCOVER THE WORLD',
            'titre_2' => 'WHAT OUR CLIENTS SAY',
            'titre_3' => 'GET IN (THE LAB AND) SEE THE SERVICES',
            'titre_4' => 'GET IN (THE LAB) AND MEET THE TEAM',
            'titre_5' => 'Are you ready to stand out?',
            'titre_6' => 'GET IN (THE LAB) AND SEE THE SERVICES',
            'titre_7' => 'GET IN (THE LAB) AND DISCOVER THE WORLD',
            'description_1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.',
            'description_2' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.',
            'description_3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.',
            'contact_titre' => 'CONTACT US',
            'contact_description' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
            'contact_soustitre' => 'Main Office',
            'contact_rue' => 'C/ Libertad, 34',
            'contact_ville' => '05200 Arévalo',
            'contact_telephone' => '0034 37483 2445 322',
            'contact_email' => 'hello@company.com',
            'created_at'=>now()]
        ]);
    }
}
