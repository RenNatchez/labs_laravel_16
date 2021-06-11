<?php

namespace Database\Seeders;

use App\Http\Controllers\ContenuController;
use App\Models\Carousel;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            IconeSeeder::class,
            ServiceSeeder::class,
            CarouselSeeder::class,
            VideoSeeder::class,
            TestimonialSeeder::class,
            SubjectSeeder::class,
            RoleSeeder::class,
            PosteSeeder::class,
            GooglemapsSeeder::class,
            TagSeeder::class,
            CategorieSeeder::class,
            UserSeeder::class,
            BlogSeeder::class,
            BlogtagsSeeder::class,
            ContenuSeeder::class,
        ]);
    }
}
