<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsThemeStatusToThemesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('themes', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('theme_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('themes', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });
    }
}
