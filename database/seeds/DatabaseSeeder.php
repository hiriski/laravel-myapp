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
            BlogStylesTableSeeder::class,
            SettingsTableSeeder::class,
            VisualSettingsTableSeeder::class,
            
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
            BlogStatusTableSeeder::class,
            BlogTagsTableSeeder::class,
            // BlogTagBlogTableSeeder::class,

            /** Roles & Permission */
            RolesTableSeeder::class,
            PermissionsTableSeeder::class,
            RoleHasPermissionsTableSeeder::class,
            ModelHasRolesTableSeeder::class,

            /** Themes */
            ThemeCategoriesTableSeeder::class,
            ThemeStatusTableSeeder::class,
            ThemeTagsTableSeeder::class,

            /** Contact */
            ContactTopicsTableSeeder::class,

            /** Work */
            WorkTagsTableSeeder::class,
            WorkStatusTableSeeder::class,
            WorkCategoriesTableSeeder::class,

        ]);

        /** Blog Faker */
        // factory(Blog::class, 20)->create();
    }
}