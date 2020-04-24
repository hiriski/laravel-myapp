<?php

use Illuminate\Database\Seeder;

class ContactTopicsTableSeeder extends Seeder {

    private $tableName = 'contact_topics';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $contact_topics = array(
            array(
                'id'    => 1,
                'name'  => 'Just saying hello'
            ),
            array(
                'id'    => 2,
                'name'  => 'Hiring'
            ),
            array(
                'id'    => 3,
                'name'  => 'Question'
            ),
            array(
                'id'    => 4,
                'name'  => 'Collaboration'
            ),
            array(
                'id'    => 5,
                'name'  => 'Submitting an Idea'
            )
        );
        DB::table($this->tableName)->insert($contact_topics);
    }
}
