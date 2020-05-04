<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('contacts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedInteger('topic_id');
      $table->string('name');
      $table->string('email');
      $table->text('content');
      $table->string('phone_number')->nullable();
      $table->ipAddress('ip_address')->nullable();
      $table->string('website')->nullable();
      $table->string('devices')->nullable();
      $table->string('country')->nullable();
      $table->timestamp('received_at');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('contacts');
  }
}
