<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsBlogStylesToVisualSettingsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('visual_settings', function (Blueprint $table) {
            $table->foreign('blog_style_id')->references('id')->on('blog_styles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('visual_settings', function (Blueprint $table) {
            $table->dropForeign('blog_style_id');
        });
    }
}
