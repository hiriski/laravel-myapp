<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'name'          => 'Riski',
                'slug'          => Str::slug('Anh', ''),
                'email'         => 'anh@riski.web.id',
                'password'      => bcrypt('secret'),
                'created_at'    => Carbon::now(),
            ),
            array(
                'name'          => 'Ngọc',
                'slug'          => Str::slug('Em', ''),
                'email'         => 'em@riski.web.id',
                'password'      => bcrypt('secret'),
                'created_at'    => Carbon::now(),
            ),
            array(
                'name'          => 'User',
                'slug'          => Str::slug('User', ''),
                'email'         => 'user@riski.web.id',
                'password'      => bcrypt('secret'),
                'created_at'    => Carbon::now(),
            ),
        );
        DB::table($this->tableName)->insert($users);
    }
}
