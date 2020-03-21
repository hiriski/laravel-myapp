<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnLangPhasesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('learn_lang_phrases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indonesia')->nullable();
            $table->string('english')->nullable();
            $table->string('vietnam')->nullable();
            $table->unsignedInteger('category_id');
            $table->text('notes')->nullable();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
            
            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('restrict');

            $table->foreign('category_id')
                ->references('id')
                ->on('learn_lang_phrase_categories')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('learn_lang_phrases');
    }
}
