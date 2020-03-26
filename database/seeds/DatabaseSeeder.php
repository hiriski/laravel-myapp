<?php

use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        
        /** Mass Assignment Calling Seeder */
        $this->call([
            LanguagesTableSeeder::class,
            
            /** user and profile */
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
                
            /** sentence */
            LearnLangSentenceLevelsTableSeeder::class,
            LearnLangSentenceCategoriesTableSeeder::class,
            LearnLangSentencesTableSeeder::class,
                        
            /** phrase */
            LearnLangPhraseCategoriesTableSeeder::class,
            LearnLangPhrasesTableSeeder::class,

            /** Blog */
            BlogCategoriesTableSeeder::class,

        ]);

        /** Blog Faker */
        Blog::unguard();
        Blog::truncate();
        factory(Blog::class, 50)->create();
        Blog::reguard();
    }
}
