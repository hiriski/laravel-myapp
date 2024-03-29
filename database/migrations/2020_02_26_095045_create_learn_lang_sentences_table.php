<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnLangSentencesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('learn_lang_sentences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->text('indonesia')->nullable();
            $table->text('english')->nullable();
            $table->text('vietnam')->nullable();
            $table->text('notes')->nullable();
            $table->text('reference')->nullable();

            /* Foreign key */
            $table->unsignedInteger('category_id');
            $table->unsignedBigInteger('created_by');
            $table->unsignedTinyInteger('level_id');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('category_id')
                ->references('id')
                ->on('learn_lang_sentence_categories')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('level_id')
                ->references('id')
                ->on('learn_lang_sentence_levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('learn_lang_sentences');
    }
}
