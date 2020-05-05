<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisualSettingsTable extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('visual_settings', function (Blueprint $table) {
      $table->tinyIncrements('id');
      $table->string('color')->nullable();
      $table->string('favicon')->nullable();
      $table->string('primary_logo')->nullable();
      $table->string('secondary_logo')->nullable();
      $table->unsignedTinyInteger('blog_style_id')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('visual_settings');
  }
}
