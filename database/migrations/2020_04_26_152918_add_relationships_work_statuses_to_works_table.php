<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsWorkStatusesToWorksTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('works', function (Blueprint $table) {
            $table->foreign('status_id')->references('id')->on('work_statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('works', function (Blueprint $table) {
            $table->dropForeign(['status_id']);
        });
    }
}
