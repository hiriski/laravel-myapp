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
      array('id' => 1, 'name' => 'Uncategory'),
      array('id' => 2, 'name' => 'Technology'),
      array('id' => 3, 'name' => 'Motivation'),
      array('id' => 4, 'name' => 'Love'),
      array('id' => 5, 'name' => 'Game')
    );
    DB::table($this->tableName)->insert($categories);
  }
}
