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
            $table->string('tile_color')->nullable()->comment('Header theme color for mobile browsers');

            /** Foreign Key */
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('category_id');

            /** options */
            $table->unsignedTinyInteger('status_id');
            $table->boolean('show_sidebar')->default(false);
            $table->boolean('show_hit')->default(true);
            $table->boolean('show_author')->default(false);
            $table->boolean('show_subscribe_box')->default(true);

            /** etc */
            $table->unsignedBigInteger('hit')->nullable();
            $table->unsignedBigInteger('share_count')->nullable();

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
