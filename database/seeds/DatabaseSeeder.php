<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        
        $this->call(LanguagesTableSeeder::class);
        
        /** user and profile */
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);

        /** sentence */
        $this->call(LearnLangSentenceLevelsTableSeeder::class);
        $this->call(LearnLangSentenceCategoriesTableSeeder::class);
        $this->call(LearnLangSentenceTagsTableSeeder::class);
        $this->call(LearnLangSentencesTableSeeder::class);
        $this->call(LearnLangSentenceLearnLangSentenceTagTableSeeder::class);

        /** post */
        $this->call(PostCategoriesTableSeeder::class);
        
        /** phrase */
        $this->call(LearnLangPhraseCategoriesTableSeeder::class);
        $this->call(LearnLangPhrasesTableSeeder::class);
    }
}
