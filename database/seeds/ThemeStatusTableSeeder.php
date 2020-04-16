<?php

use Illuminate\Database\Seeder;

class ThemeStatusTableSeeder extends Seeder {

    private $tableName = 'theme_status';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $theme_status = array(
            array('id' => 1, 'name' => 'Published'),
            array('id' => 2, 'name' => 'Draft'),
            array('id' => 4, 'name' => 'Private'),
        );
        DB::table($this->tableName)->insert($theme_status);
    }
}
