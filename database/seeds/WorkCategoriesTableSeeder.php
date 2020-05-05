<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkCategoriesTableSeeder extends Seeder {

  private $tableName = 'work_categories';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $work_categories = array(
      array(
        'id'    => 1,
        'name'  =>'Web Apps',
        'slug'  => Str::slug('Web Apps')
      ),
      array(
        'id'    => 2,
        'name'  => 'Blogger Theme',
        'slug'  => Str::slug('Blogger Theme')
      ),
      array(
        'id'    => 3,
        'name'  => 'HTML Template',
        'slug'  => Str::slug('HTML Template')
      ),
      array(
        'id'    => 4,
        'name'  => 'Web Design',
        'slug'  => Str::slug('Web Design')
      )
    );
    DB::table($this->tableName)->insert($work_categories);
  }
}
