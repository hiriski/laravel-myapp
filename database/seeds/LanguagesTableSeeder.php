<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder {

	private $tableName = 'languages';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $languages = array(
        	array('code' => 'en', 'name' => 'English'),
        	array('code' => 'id', 'name' => 'Bahasa Indonesia'),
        	array('code' => 'vi', 'name' => 'Tiếng Việt')
        );
        DB::table($this->tableName)->insert($languages);
	}
}