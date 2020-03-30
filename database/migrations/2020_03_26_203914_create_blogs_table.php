<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('content');

            $table->string('image_xs')->nullable();
            $table->string('image_sm')->nullable();
            $table->string('image_md')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('image')->nullable()->comment('Original image');

            /** Foreign Key */
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('category_id');

            /** options */
            $table->boolean('status')->default(false);
            $table->boolean('private')->default(false);

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
        Schema::dropIfExists('blogs');
    }
}
