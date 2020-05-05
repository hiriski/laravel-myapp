<?php

use Illuminate\Database\Seeder;

class ThemeTagsTableSeeder extends Seeder {

  private $tableName = 'theme_tags';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $blog_tags = array(
      array('id'  => 1, 'name' => 'Material Design',  'slug' => 'material-design'),
      array('id'  => 2, 'name' => 'Dark',             'slug' => 'dark'),
      array('id'  => 3, 'name' => 'Blogging',         'slug' => 'blogging'),
      array('id'  => 4, 'name' => 'Shopping',         'slug' => 'shopping'),
    );
    DB::table($this->tableName)->insert($blog_tags);
  }
}
