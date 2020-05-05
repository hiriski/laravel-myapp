<?php

use Illuminate\Database\Seeder;

class LearnLangPhraseCategoriesTableSeeder extends Seeder {

private $tableName = "learn_lang_phrase_categories";

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    
    $categories = array(
      array('id' => 1, 'name' => 'Uncategory'),
      array('id' => 2, 'name' => 'Greetings'),
      array('id' => 3, 'name' => 'Romance'),
      array('id' => 4, 'name' => 'Emergency'),
      array('id' => 5, 'name' => 'Eating'),
      array('id' => 6, 'name' => 'Shoping'),
      array('id' => 7, 'name' => 'Numbers'),
      array('id' => 8, 'name' => 'Transportation'),
      array('id' => 9, 'name' => 'Accomodation'),
      array('id' => 10, 'name' => 'Directions'),
      array('id' => 11, 'name' => 'Weather'),
      array('id' => 12, 'name' => 'Driving'),
      array('id' => 13, 'name' => 'Places'),
      array('id' => 14, 'name' => 'Animals'),
      array('id' => 15, 'name' => 'Dates'),
      array('id' => 16, 'name' => 'Colors'),
      array('id' => 17, 'name' => 'Time'),
      array('id' => 18, 'name' => 'Studies'),
      array('id' => 19, 'name' => 'Occupations'),
      array('id' => 20, 'name' => 'Fluits'),
      array('id' => 21, 'name' => 'Hobbies'),
      array('id' => 22, 'name' => 'Health')
    );
    DB::table($this->tableName)->insert($categories);
  }
}
