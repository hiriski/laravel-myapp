<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsBlogStatusToBlogsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('blogs', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('blog_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropForeign('status_id');
        });
    }
}
