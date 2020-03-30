<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategoriesTableSeeder extends Seeder {

    private $tableName = 'blog_categories';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $categories = array(
            array(
                'id'    => 1,
                'name'  => 'Uncategory',
                'slug'  => Str::slug('Uncategory', '')
            ),
            array(
                'id'    => 2,
                'name'  => 'Javascript',
                'slug'  => Str::slug('Javascript', '')
            ),
            array(
                'id'    => 3,
                'name'  => 'PHP',
                'slug'  => Str::slug('PHP', '')
            ),
            array(
                'id'    => 4,
                'name'  => 'Laravel',
                'slug'  => Str::slug('Laravel', '')
            ),
            array(
                'id'    => 5,
                'name'  => 'Vue.js',
                'slug'  => Str::slug('Vue.js', '')
            ),
            array(
                'id'    => 6,
                'name'  => 'ReactJs',
                'slug'  => Str::slug('ReactJs', '')
            ),
            array(
                'id'    => 7,
                'name'  => 'HTML',
                'slug'  => Str::slug('HTML', '')
            ),
            array(
                'id'    => 8,
                'name'  => 'CSS3',
                'slug'  => Str::slug('CSS3', '')
            ),
            array(
                'id'    => 9,
                'name'  => 'Sass',
                'slug'  => Str::slug('Sass', '')
            ),
            array(
                'id'    => 10,
                'name'  => 'Bootstrap',
                'slug'  => Str::slug('Twitter Bootstrap', '')
            ),
            array(
                'id'    => 11,
                'name'  => 'Git',
                'slug'  => Str::slug('Git', '')
            ),
            array(
                'id'    => 12,
                'name'  => 'Tips',
                'slug'  => Str::slug('Tips', '')
            ),
            array(
                'id'    => 13,
                'name'  => 'Android',
                'slug'  => Str::slug('Android', '')
            ),
            array(
                'id'    => 14,
                'name'  => 'PUBG Mobile',
                'slug'  => Str::slug('PUBG Mobile', '')
            )
        );
        DB::table($this->tableName)->insert($categories);
    }
}
