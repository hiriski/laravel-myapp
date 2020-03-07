<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug', 255)->unique();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->text('content');
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('category_id');
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');

            $table->foreign('category_id')
                ->references('id')
                ->on('post_categories')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('posts');
    }
}
