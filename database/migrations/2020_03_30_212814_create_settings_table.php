<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('settings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedTinyInteger('language_id')->default(1)->nullable()
        ->comment('Site Language, default 1 : english');

      /** Info */
      $table->string('app_name')->nullable();
      $table->string('title')->nullable();
      $table->string('description')->nullable();
      $table->string('keywords')->nullable();

      /** Social links */
      $table->string('facebook_url')->nullable();
      $table->string('twitter_url')->nullable();
      $table->string('instagram_url')->nullable();
      $table->string('linkedin_url')->nullable();
      $table->string('youtube_url')->nullable();

      $table->string('copyright')->nullable();

      $table->boolean('show_featured_post')->default(false);
      $table->boolean('show_blog_homepage')->default(false);
      $table->boolean('show_work_homepage')->default(true);
      $table->unsignedInteger('blog_perpage')->default(6);
      $table->unsignedInteger('work_perpage')->default(6);

      /** news letters */
      $table->string('subscribe_title')->nullable();
      $table->text('subscribe_text', 300)->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('settings');
  }
}
