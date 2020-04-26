<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('url')->nullable();
            $table->text('description');
            $table->unsignedInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('status_id');

            $table->string('image_xs')->nullable();
            $table->string('image_md')->nullable();
            $table->string('image')->nullable()->comment('Original image size');

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
        Schema::dropIfExists('works');
    }
}
