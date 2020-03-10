<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'slug'          => Str::slug('anh'),
                'first_name'    => 'Riski',
                'last_name'     => 'Web ID',
                'image_url'     => 'images/profiles/anh.png',
                'image_sm_url'  => 'images/profiles/anh-sm.png',
                'language'      => 'en'
            ),
            array(
                'user_id'       => 2,
                'slug'          => Str::slug('em'),
                'first_name'    => 'Em',
                'last_name'     => 'Xinh Đẹp',
                'image_url'     => 'images/profiles/em.jpg',
                'image_sm_url'  => 'images/profiles/em-sm.jpg',
                'language'      => 'vn'
            )
        );
        DB::table($this->tableName)->insert($users_profile);
    }
}
