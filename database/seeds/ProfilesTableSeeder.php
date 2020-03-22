<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

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

                /** Don't use dinamis timestamp for seeder
                 * 'image_sm'      =>  Str::slug("Riski Web ID", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'sm.png',
                 * 'image_md'      =>  Str::slug("Riski Web ID", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'md.png',
                 * 'image'         =>  Str::slug("Riski Web ID", "_") . '_' . Str::slug(Carbon::now(), '_') .         '.png',
                 */

                /* use statis filename */
                'image_sm'      => 'riski_web_id_2020_03_22_142500_sm.png',
                'image_md'      => 'riski_web_id_2020_03_22_142828_md.png',
                'image'         =>  'riski_web_id_2020_03_22_142500.png',

                'language_id'   => 1,
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

                /** Don't use dinamis timestamp for seeder
                 * 'image_sm'      =>  Str::slug("Em Xinh Đẹp", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'sm.jpg',
                 * 'image_md'      =>  Str::slug("Em Xinh Đẹp", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'md.jpg',
                 * 'image'         =>  Str::slug("Em Xinh Đẹp", "_") . '_' . Str::slug(Carbon::now(), '_') .         '.jpg',
                 */

                /* use statis filename */
                'image_sm'      => 'em_xinh_dep_2020_03_22_142500_sm.jpg',
                'image_md'      => 'em_xinh_dep_2020_03_22_142828_md.jpg',
                'image'         => 'em_xinh_dep_2020_03_22_142500.jpg',

                'language_id'   => 3,
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

                /** Don't use dinamis timestamp for seeder
                 * 'image_sm'      =>  Str::slug("User", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'sm.png',
                 * 'image_md'      =>  Str::slug("User", "_") . '_' . Str::slug(Carbon::now(), '_') . '_' . 'md.png',
                 * 'image'         =>  Str::slug("User", "_") . '_' . Str::slug(Carbon::now(), '_') .         '.png',
                 */
                
                /* use statis filename */
                'image_sm'      => 'user_2020_03_22_142500_sm.png',
                'image_md'      => 'user_2020_03_22_142828_md.png',
                'image'         => 'user_2020_03_22_142500.png',

                'language_id'   => 2,
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
