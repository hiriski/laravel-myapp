<?php

use Illuminate\Database\Seeder;

class LearnLangPhrasesTableSeeder extends Seeder {

private $tableName = "learn_lang_phrases";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $phrases = array(
            array(
                'indonesia' => 'Halo',
                'english' => 'Hello',
                'vietnam' => 'Xin chào',
                'category_id' => 1
                ),
           array(
                'indonesia' => 'Senang bertemu denganmu',
                'english' => 'Nice to meet you!',
                'vietnam' => 'Rất vui được gặp bạn',
                'category_id' => 1
                ),
                
         );
         DB::table($this->tableName)->insert($phrases);
    }
}
