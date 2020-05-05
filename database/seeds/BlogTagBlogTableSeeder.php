<?php

use Illuminate\Database\Seeder;

class BlogTagBlogTableSeeder extends Seeder {

  private $tableName = 'blog_tag_blog';
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $relation_blog_tag_to_blog = array(
      array('blog_id' => 25, 'tag_id' => 1),
      array('blog_id' => 25, 'tag_id' => 2),
      array('blog_id' => 25, 'tag_id' => 5)
    );
    DB::table($this->tableName)->insert($relation_blog_tag_to_blog);
  }
}
