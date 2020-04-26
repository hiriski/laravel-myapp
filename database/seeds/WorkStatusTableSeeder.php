<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkStatusTableSeeder extends Seeder {

    private $tableName = 'work_statuses';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $work_tags = array(
            array(
                'id'    => 1,
                'name'  =>'Published',
                'slug'  => Str::slug('Published')
            ),
            array(
                'id'    => 2,
                'name'  => 'Private',
                'slug'  => Str::slug('Private')
            )
        );
        DB::table($this->tableName)->insert($work_tags);
    }
}
