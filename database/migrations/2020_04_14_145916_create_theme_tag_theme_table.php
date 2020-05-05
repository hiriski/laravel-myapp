<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeTagThemeTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('theme_tag_theme', function (Blueprint $table) {
      $table->unsignedBigInteger('theme_id');
      $table->unsignedBigInteger('tag_id');

      $table->foreign('theme_id')->references('id')->on('themes')
        ->onUpdate('cascade')
        ->onDelete('cascade');

      $table->foreign('tag_id')->references('id')->on('theme_tags')
        ->onUpdate('cascade')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('theme_tag_theme');
  }
}
