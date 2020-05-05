<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsContactTopicsToContactsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::table('contacts', function (Blueprint $table) {
			$table->foreign('topic_id')->references('id')->on('contact_topics')
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
    Schema::table('contacts', function (Blueprint $table) {
      $table->dropForeign(['topic_id']);
    });
  }
}
