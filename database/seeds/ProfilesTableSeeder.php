<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder {

    private $tableName = 'profiles';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $users_profile = array(
            array(
                'user_id'       => 1,
                'first_name'    => 'Riski',
                'last_name'     => 'Web ID',
                'image_url'     => 'images/profiles/anh.png',
            ),
            array(
                'user_id'       => 2,
                'first_name'    => 'Em',
                'last_name'     => 'Xinh Đẹp',
                'image_url'     => 'images/profiles/em.jpg',
            )
        );
        DB::table($this->tableName)->insert($users_profile);
    }
}
