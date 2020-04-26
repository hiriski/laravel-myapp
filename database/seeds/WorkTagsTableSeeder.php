<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkTagsTableSeeder extends Seeder {

    private $tableName = 'work_tags';

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
                'name'  =>'Web Apps',
                'slug'  => Str::slug('Web Apps')
            ),
            array(
                'id'    => 2,
                'name'  => 'Templates',
                'slug'  => Str::slug('Templates')
            ),
            array(
                'id'    => 3,
                'name'  => 'Web Design',
                'slug'  => Str::slug('Web Design')
            )
        );
        DB::table($this->tableName)->insert($work_tags);
    }
}
