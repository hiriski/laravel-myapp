1<?php

use Illuminate\Database\Seeder;

class LearnLangPhraseCategoriesTableSeeder extends Seeder {

private $tableName = "learn_lang_phrase_categories";

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        
        $categories = array(
            array('name' => 'Uncategory'),
            array('name' => 'Greetings'),
            array('name' => 'Romance'),
            array('name' => 'Emergency'),
            array('name' => 'Eating'),
            array('name' => 'Shoping'),
            array('name' => 'Numbers'),
            array('name' => 'Transportation'),
            array('name' => 'Accomodation'),
            array('name' => 'Directions'),
            array('name' => 'Weather'),
            array('name' => 'Driving'),
            array('name' => 'Places'),
            array('name' => 'Animals'),
            array('name' => 'Dates'),
            array('name' => 'Colors'),
            array('name' => 'Time'),
            array('name' => 'Studies'),
            array('name' => 'Occupations'),
            array('name' => 'Fluits'),
            array('name' => 'Hobbies'),
            array('name' => 'Health')
        );
        
        DB::table($this->tableName)->insert($categories);
    }
}
