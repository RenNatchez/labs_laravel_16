<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            [
                "titre" => "Le Titre De L'Article 1", 
                "image" => "blog-1.jpg", 
                "contenu" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.',
                "validate" => 1,
                "user_id" => 1,
                "categorie_id" => 2,
                "created_at" => now()
            ],
            [
                "titre" => "Le Titre De L'Article 2", 
                "image" => "blog-1.jpg", 
                "contenu" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.',
                "validate" => 0,
                "user_id" => 1,
                "categorie_id" => 2,
                "created_at" => now()
            ],
            [
                "titre" => "Le Titre De L'Article 3",
                "image" => "blog-2.jpg", 
                "contenu" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.',
                "validate" => 1,
                "user_id" => 2,
                "categorie_id" => 2,
                "created_at" => now()
            ],
            [
                "titre" => "Le Titre De L'Article 4",
                "image" => "blog-3.jpg", 
                "contenu" => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id,
                suscipit id nulla. Phasellus vestibulum, quam tincidunt venenatis ultrices, est libero mattis ante, ac
                consectetur diam neque eget quam. Etiam feugiat augue et varius blandit. Praesent mattis, eros a sodales
                commodo.',
                "validate" => 1,
                "user_id" => 1,
                "categorie_id" => 2,
                "created_at" => now()
            ],
        ]);

    }
}
