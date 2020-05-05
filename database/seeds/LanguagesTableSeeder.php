<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder {

  private $tableName = 'languages';
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $languages = array(
      array('id' => 1, 'code' => 'en', 'name' => 'English'),
      array('id' => 2, 'code' => 'id', 'name' => 'Bahasa Indonesia'),
      array('id' => 3, 'code' => 'vi', 'name' => 'Tiếng Việt')
    );
    DB::table($this->tableName)->insert($languages);
  }
}