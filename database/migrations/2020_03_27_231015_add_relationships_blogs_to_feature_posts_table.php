<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsBlogsToFeaturePostsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('feature_posts', function (Blueprint $table) {
			$table->foreign('post_id')->references('id')->on('blogs')
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
    Schema::table('feature_posts', function (Blueprint $table) {
      $table->dropForeign(['post_id']);
    });
  }
}
