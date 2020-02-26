<?php

use Illuminate\Database\Seeder;

class LearnLangSentenceLearnLangSentenceTagTableSeeder extends Seeder {

    protected $tableName = 'learn_lang_sentence_learn_lang_sentence_tag';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $sentence_tag = array(
            array('sentence_id' => 1, 'tag_id' => 4),
            array('sentence_id' => 1, 'tag_id' => 4)
        );
        DB::table($this->tableName)->insert($sentence_tag);
    }
}
