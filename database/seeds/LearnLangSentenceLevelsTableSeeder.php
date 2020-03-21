<?php

use Illuminate\Database\Seeder;

class LearnLangSentenceLevelsTableSeeder extends Seeder {

    private $tableName = 'learn_lang_sentence_levels';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $levels = array(
            array('name' => 'Easy'),
            array('name' => 'Normal'),
            array('name' => 'Hard')
        );
        DB::table($this->tableName)->insert($levels);
    }
}
