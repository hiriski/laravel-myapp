<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnLangSentenceLearnLangSentenceTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learn_lang_sentence_learn_lang_sentence_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sentence_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('sentence_id')
                ->references('id')
                ->on('learn_lang_sentences')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('learn_lang_sentence_tags')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learn_lang_sentence_learn_lang_sentence_tag');
    }
}
