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
                'role'          => 'admin',
                'slug'          => Str::slug('anh'),
                'first_name'    => 'Riski',
                'last_name'     => 'Web ID',
                'image_url'     => 'images/profiles/anh.png',
                'image_sm_url'  => 'images/profiles/anh-sm.png',
                'language'      => 'en',
                'facebook_url'  => 'https://facebook.com/hi.riski',
                'instagram_url' => 'https://www.instagram.com/riskiwebid/',
                'github_url'    => 'https://github.com/riskiwebid',
                'codepen_url'   => 'https://codepen.io/riskiwebid',
                'whatsapp'      => '6282122281813',
            ),
            array(
                'user_id'       => 2,
                'role'          => 'user',
                'slug'          => Str::slug('em'),
                'first_name'    => 'Em',
                'last_name'     => 'Xinh Đẹp',
                'image_url'     => 'images/profiles/em.jpg',
                'image_sm_url'  => 'images/profiles/em-sm.jpg',
                'language'      => 'vn',
                'facebook_url'  => 'https://web.facebook.com/',
                'instagram_url' => 'https://www.instagram.com/',
                'github_url'    => NULL,
                'codepen_url'   => NULL,
                'whatsapp'      => NULL,
            ),
            array(
                'user_id'       => 3,
                'role'          => 'user',
                'slug'          => Str::slug('user'),
                'first_name'    => 'User',
                'last_name'     => '',
                'image_url'     => 'images/profiles/user.png',
                'image_sm_url'  => 'images/profiles/user-sm.png',
                'language'      => 'en',
                'facebook_url'  => 'https://web.facebook.com/',
                'instagram_url' => 'https://www.instagram.com/',
                'github_url'    => NULL,
                'codepen_url'   => NULL,
                'whatsapp'      => NULL,
            )
        );
        DB::table($this->tableName)->insert($users_profile);
    }
}
