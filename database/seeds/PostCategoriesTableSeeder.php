<?php

use Illuminate\Database\Seeder;

class PostCategoriesTableSeeder extends Seeder {

    private $tableName = 'post_categories';
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $categories = array(
            array('name' => 'PHP'),
            array('name' => 'Vue.js'),
            array('name' => 'Laravel'),
            array('name' => 'Javascript')
        );
        DB::table($this->tableName)->insert($categories);
    }
}
