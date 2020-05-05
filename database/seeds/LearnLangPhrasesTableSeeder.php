<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LearnLangPhrasesTableSeeder extends Seeder {

private $tableName = "learn_lang_phrases";

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
      DB::table($this->tableName)->delete();
      $phrases = array(
        array(
          'indonesia'    => 'Halo',
          'english'      => 'Hello',
          'vietnam'      => 'Xin chào',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Siapa namamu ?',
          'english'      => 'What\'s your name ?',
          'vietnam'      => 'Bạn tên gì?',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Nama saya Riski Schoot Kenedy',
          'english'      => 'My name is Riski Schoot Kenedy',
          'vietnam'      => 'Tôi tên là Riski Schoot Kenedy',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Kamu sangat baik',
          'english'      => 'You\'re very kind',
          'vietnam'      => 'Bạn thật tốt!',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Senang bertemu denganmu',
          'english'      => 'Nice to meet you!',
          'vietnam'      => 'Rất vui được gặp bạn',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Selamat pagi',
          'english'      => 'Good morning',
          'vietnam'      => 'Chào buổi sáng',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Selamat sore',
          'english'      => 'Good evening',
          'vietnam'      => 'Chào buổi tối',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Selamat datang!',
          'english'      => 'Welcome! (to greet someone)',
          'vietnam'      => 'Chào mừng bạn ( đã đến đây )!',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Apa kabar ?',
          'english'      => 'How are you ?',
          'vietnam'      => 'bạn có khỏe không? Khỏe chứ?( informal )',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Baik, terima kasih',
          'english'      => 'I\'m fine, thanks!',
          'vietnam'      => 'Cám ơn bạn tôi khỏe',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Dan kamu ?',
          'english'      => 'And you ?',
          'vietnam'      => 'Bạn thì sao ?',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Terima kasih (banyak)',
          'english'      => 'Thank you (so much)',
          'vietnam'      => 'Cám ơn ( rất nhiều )',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Selamat tidur!',
          'english'      => 'Good night!',
          'vietnam'      => 'Chúc ngủ ngon!',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Sampai jumpa',
          'english'      => 'See you later',
          'vietnam'      => 'Gặp lại sau nhé',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          ),
        array(
          'indonesia'    => 'Bye-bye',
          'english'      => 'Good bye',
          'vietnam'      => 'Tạm biệt',
          'created_by'   => 1,
          'category_id'  => 1,
          'created_at'   => Carbon::now(),
          )
      );
      DB::table($this->tableName)->insert($phrases);
  }
}
