<?php

use Illuminate\Database\Seeder;

class ModelHasRolesTableSeeder extends Seeder {

    private $tableName = 'model_has_roles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $model_has_roles = array(
            array(
                'role_id'       => 1,
                'model_type'    => 'App\Models\User',
                'model_id'      => 1,
            ),
            array(
                'role_id'       => 2,
                'model_tyle'    => 'App\Models\User',
                'model_id'      => 2,
            ),
            array(
                'role_id'       => 2,
                'model_tyle'    => 'App\Models\User',
                'model_id'      => 3,
            ),
        );
        DB::table($this->tableName)->insert($model_has_roles);
    }
}
