<?php

use Illuminate\Database\Seeder;

class BlogStatusTableSeeder extends Seeder {

    private $tableName = 'blog_status';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();

        $blog_status = array(
            array('id' => 1, 'name' => 'Published'),
            array('id' => 2, 'name' => 'Draft'),
            array('id' => 3, 'name' => 'Pending'),
            array('id' => 4, 'name' => 'Private'),
            array('id' => 5, 'name' => 'Need Auth'),
        );

        DB::table($this->tableName)->insert($blog_status);
    }
}
