<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            array(
                'name'      => 'Riski',
                'email'     => 'anh@riski.web.id',
                'password'  => bcrypt('secret'),
                'created_at'  => Carbon::now(),
            ),
            array(
                // 'name'      => 'Nguyễn Thị Bích Ngọc',
                'name'      => 'Ngọc',
                'email'     => 'em@riski.web.id',
                'password'  => bcrypt('secret'),
                'created_at'  => Carbon::now(),
            ),
        );
        DB::table($this->tableName)->insert($users);
    }
}
