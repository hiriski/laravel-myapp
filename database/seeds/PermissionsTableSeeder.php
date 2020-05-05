<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PermissionsTableSeeder extends Seeder {

  private $tableName = 'permissions';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $permissions = array(
      array(
        'id'            => 1,
        'name'          => 'permission users',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
      array(
        'id'            => 2,
        'name'          => 'permission blogs',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
      array(
        'id'            => 3,
        'name'          => 'permission learn',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
      array(
        'id'            => 4,
        'name'          => 'permission settings',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
    );
    DB::table($this->tableName)->insert($permissions);
  }
}
