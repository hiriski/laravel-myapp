<?php

use Illuminate\Database\Seeder;

class LearnLangSentenceTagsTableSeeder extends Seeder {
    
    private $tableName = 'learn_lang_sentence_tags';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $tags = array(
            array('name' => 'programmer'),
            array('name' => 'teknologi'),
            array('name' => 'kehidupan'),
            array('name' => 'motivasi'),
            array('name' => 'cinta')
        );
        DB::table($this->tableName)->insert($tags);
    }
}
