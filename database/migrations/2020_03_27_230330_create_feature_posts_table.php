<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePostsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('feature_posts', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedTinyInteger('order')->comment('Posisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('feature_posts');
    }
}
