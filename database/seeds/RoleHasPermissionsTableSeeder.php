<?php

use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder {

    private $tableName = 'role_has_permissions';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $role_has_permissions = array(
            array(
                'permission_id'     => 1,
                'role_id'           => 1,
            ),
            array(
                'permission_id'     => 2,
                'role_id'           => 1,
            ),
            array(
                'permission_id'     => 3,
                'role_id'           => 1,
            ),
            array(
                'permission_id'     => 4,
                'role_id'           => 1,
            ),
            array(
                'permission_id'     => 3,
                'role_id'           => 2,
            ),
        );
        DB::table($this->tableName)->insert($role_has_permissions);
    }
}
