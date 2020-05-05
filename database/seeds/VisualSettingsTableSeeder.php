<?php

use Illuminate\Database\Seeder;

class VisualSettingsTableSeeder extends Seeder {

  private $tableName = 'visual_settings';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $visual_settings = array(
      'blog_style_id' => 1
    );
    DB::table($this->tableName)->insert($visual_settings);
  }
}
