<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder {

  private $tableName = 'settings';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $settings = array(
      'id'            => 1,
      'language_id'   => 1, // english
      'app_name'      => 'Riski App',
      'title'         => 'Riski Web ID'
    );
    DB::table($this->tableName)->insert($settings);
  }
}
