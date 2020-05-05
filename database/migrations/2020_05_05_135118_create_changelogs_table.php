<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangelogsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
		/** Changelog table for theme */
    Schema::create('changelogs', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('version');
			$table->text('content')->comment('List changelog in html');
			$table->date('changelog_date')->comment('version changelog date');
			$table->unsignedBigInteger('theme_id');
			
			$table->foreign('theme_id')->references('id')->on('themes')
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
    Schema::dropIfExists('changelogs');
  }
}
