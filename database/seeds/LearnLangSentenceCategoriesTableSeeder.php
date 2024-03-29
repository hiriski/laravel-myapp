<?php

use Illuminate\Database\Seeder;

class LearnLangSentenceCategoriesTableSeeder extends Seeder {

    private $tableName = 'learn_lang_sentence_categories';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $categories = array(
            array('name' => 'Uncategory'),
            array('name' => 'Technology'),
            array('name' => 'Motivation'),
            array('name' => 'Love'),
            array('name' => 'Game')
        );
        DB::table($this->tableName)->insert($categories);
    }
}
