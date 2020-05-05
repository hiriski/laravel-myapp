<?php

use Illuminate\Database\Seeder;

class BlogTagsTableSeeder extends Seeder {

  private $tableName = 'blog_tags';
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $blog_tags = array(
      array('id'  => 1, 'name' => 'Relationships', 'slug' => 'relationships'),
      array('id'  => 2, 'name' => 'Database Eloquent', 'slug' => 'database-eloquent'),
      array('id'  => 3, 'name' => 'Migration', 'slug' => 'migration'),
      array('id'  => 4, 'name' => 'Seeding', 'slug' => 'seeding'),
      array('id'  => 5, 'name' => 'Database', 'slug' => 'database'),
      array('id'  => 6, 'name' => 'FrontEnd', 'slug' => 'frontend'),
      array('id'  => 7, 'name' => 'Laravel 7', 'slug' => 'laravel7'),
      array('id'  => 8, 'name' => 'CRUD', 'slug' => 'crud')
    );
    DB::table($this->tableName)->insert($blog_tags);
  }
}
