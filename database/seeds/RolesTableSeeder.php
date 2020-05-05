<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder {

  private $tableName = 'roles';

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    DB::table($this->tableName)->delete();
    $roles = array(
      array(
        'id'            => 1,
        'name'          => 'admin',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
      array(
        'id'            => 2,
        'name'          => 'user',
        'guard_name'    => 'web',
        'created_at'    => Carbon::now()
      ),
    );
    DB::table($this->tableName)->insert($roles);
  }
}
