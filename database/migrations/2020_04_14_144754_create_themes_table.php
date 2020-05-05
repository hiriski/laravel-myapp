<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemesTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('themes', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->string('slug')->unique();
      $table->text('description')->nullable();
      $table->text('keywords')->nullable();
      $table->string('image_xs')->nullable();
      $table->string('image_sm')->nullable();
      $table->string('image_md')->nullable();
      $table->string('featured_image')->nullable();
      $table->string('image')->nullable()->comment('Original image size');
      $table->string('latest_version')->nullable();
      $table->text('download_link')->nullable();
      $table->boolean('premium')->default(false)->comment('false : theme is free');
      $table->unsignedInteger('price')->nullable();
      
      /** Foreign Key */
      $table->unsignedBigInteger('user_id')->nullable();
      $table->unsignedInteger('category_id')->nullable();
      $table->unsignedTinyInteger('status_id')->nullable();
      
      /** etc */
      $table->unsignedBigInteger('hit')->nullable();
      $table->unsignedBigInteger('share_count')->nullable();
      $table->unsignedBigInteger('download_count')->nullable();
      $table->string('tile_color')->nullable();

      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('themes');
  }
}
