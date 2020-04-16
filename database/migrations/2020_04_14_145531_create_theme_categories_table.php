<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThemeCategoriesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('theme_categories', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name', 75);
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('keywords')->nullable();
            $table->text('icon')->nullable()->comment('maybe image format base64 or url image svg');
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('theme_categories');
    }
}
