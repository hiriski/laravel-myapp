<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsThemeCategoriesToThemesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('themes', function (Blueprint $table) {
      $table->foreign('category_id')->references('id')->on('theme_categories')
        ->onUpdate('set null')
        ->onDelete('set null');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::table('themes', function (Blueprint $table) {
      $table->dropForeign(['category_id']);
    });
  }
}
