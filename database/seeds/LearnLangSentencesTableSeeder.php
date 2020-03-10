<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;

class LearnLangSentencesTableSeeder extends Seeder {

    private $tableName = 'learn_lang_sentences';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table($this->tableName)->delete();
        $sentences = array(
            array(
                'user_id'       => 1,
                'category_id'   => 2,
                'level_id'      => 1,
                'slug'          => Str::slug('Hidup tidak bisa di CTRL + Z'),
                'indonesia'     => 'Hidup tidak bisa di CTRL + Z',
                'english'       => 'Life has no CTRL + Z',
                'notes'         => 'Maksudnya hidup itu gak bisa di undo',
                'reference'     => 'Foto stiker di laptop instagram milik akun @hey631',
                'created_at'    => Carbon::now(),
            ),
            array(
                'user_id'       => 1,
                'category_id'   => 2,
                'level_id'      => 1,
                'slug'          => Str::slug('Tetap Lapar Tetap Bodoh!'),
                'indonesia'     => 'Tetap Lapar Tetap Bodoh!',
                'english'       => 'Stay Hungry Stay Foolish!',
                'notes'         => 'Maksudnya tetaplah lapar dan tetap bodoh agar terus belajar',
                'reference'     => 'Wallpaper PC di kantor',
                'created_at'    => Carbon::now(),
            )
        );
        DB::table($this->tableName)->insert($sentences);
    }
}
