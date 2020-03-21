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
                'first_name'    => 'Riski',
                'last_name'     => 'Web ID',
                'image_md'      => 'images/profiles/anh.png',
                'image_sm'      => 'images/profiles/anh-sm.png',
                'language'      => 'en',
                'facebook_url'  => 'https://facebook.com/hi.riski',
                'instagram_url' => 'https://www.instagram.com/riskiwebid/',
                'github_url'    => 'https://github.com/riskiwebid',
                'codepen_url'   => 'https://codepen.io/riskiwebid',
                'whatsapp'      => '6282122281813',
            ),
            array(
                'user_id'       => 2,
                'first_name'    => 'Em',
                'last_name'     => 'Xinh Đẹp',
                'image_md'      => 'images/profiles/em.jpg',
                'image_sm'      => 'images/profiles/em-sm.jpg',
                'language'      => 'vn',
                'facebook_url'  => 'https://facebook.com/profile.php?id=100005481379207',
                'instagram_url' => 'https://www.instagram.com/',
                'github_url'    => NULL,
                'codepen_url'   => NULL,
                'whatsapp'      => NULL,
            ),
            array(
                'user_id'       => 3,
                'first_name'    => 'User',
                'last_name'     => '',
                'image_md'      => 'images/profiles/user.png',
                'image_sm'      => 'images/profiles/user-sm.png',
                'language'      => 'id',
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
