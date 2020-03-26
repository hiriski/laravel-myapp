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
                'name'  => 'Uncategory',
                'slug'  => Str::slug('Uncategory', '')
            ),
            array(
                'name'  => 'Javascript',
                'slug'  => Str::slug('Javascript', '')
            ),
            array(
                'name'  => 'PHP',
                'slug'  => Str::slug('PHP', '')
            ),
            array(
                'name'  => 'Laravel',
                'slug'  => Str::slug('Laravel', '')
            ),
            array(
                'name'  => 'Vue.js',
                'slug'  => Str::slug('Vue.js', '')
            ),
            array(
                'name'  => 'ReactJs',
                'slug'  => Str::slug('ReactJs', '')
            ),
            array(
                'name'  => 'HTML',
                'slug'  => Str::slug('HTML', '')
            ),
            array(
                'name'  => 'CSS3',
                'slug'  => Str::slug('CSS3', '')
            ),
            array(
                'name'  => 'Sass',
                'slug'  => Str::slug('Sass', '')
            ),
            array(
                'name'  => 'Twitter Bootstrap',
                'slug'  => Str::slug('Twitter Bootstrap', '')
            ),
            array(
                'name'  => 'Git',
                'slug'  => Str::slug('Git', '')
            ),
            array(
                'name'  => 'Tips',
                'slug'  => Str::slug('Tips', '')
            ),
            array(
                'name'  => 'Android',
                'slug'  => Str::slug('Android', '')
            ),
            array(
                'name'  => 'PUBG Mobile',
                'slug'  => Str::slug('PUBG Mobile', '')
            )
        );
        DB::table($this->tableName)->insert($categories);
    }
}
