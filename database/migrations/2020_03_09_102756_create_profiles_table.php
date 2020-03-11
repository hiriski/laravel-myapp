<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('role')->default('user');
            $table->string('slug')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('image_url')->nullable();
            $table->string('image_mid_url')->nullable();
            $table->string('image_sm_url')->nullable();
            $table->string('language')->default('en');

            $table->text('facebook_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('github_url')->nullable();
            $table->text('codepen_url')->nullable();
            $table->text('whatsapp')->nullable();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('profiles');
    }
}
