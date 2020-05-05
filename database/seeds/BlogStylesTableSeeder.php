<?php

use Illuminate\Database\Seeder;

class BlogStylesTableSeeder extends Seeder {

  private $tableName = 'blog_styles';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $blog_styles = array(
      array('id' => 1, 'name' => 'Default'),
      array('id' => 2, 'name' => 'Clean'),
      array('id' => 3, 'name' => 'Simple'),
      array('id' => 4, 'name' => 'Masonry')
    );
    DB::table($this->tableName)->insert($blog_styles);
  }
}
