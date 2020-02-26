<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    protected $tableName = 'users';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $users = array(
            'name'      => 'Riski',
            'email'     => 'hi@riski.web.id',
            'password'  => bcrypt('secret'),
        );
        DB::table($this->tableName)->insert($users);
    }
}
