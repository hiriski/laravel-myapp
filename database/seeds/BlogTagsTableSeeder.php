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
            array('id'  => 1, 'name' => 'Relationships',    'slug' => 'relationships'),
            array('id'  => 2, 'name' => 'Eloquent',         'slug' => 'eloquent'),
            array('id'  => 3, 'name' => 'Database',         'slug' => 'database'),
            array('id'  => 4, 'name' => 'FrontEnd',         'slug' => 'frontend'),
            array('id'  => 5, 'name' => 'Laravel 7',        'slug' => 'laravel7'),
            array('id'  => 6, 'name' => 'CRUD',             'slug' => 'crud')
        );
        DB::table($this->tableName)->insert($blog_tags);
    }
}
