<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('website')->nullable();
            $table->string('professional')->nullable();
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('avatar');
            $table->text('content');
            $table->string('from')->nullable()->comment('testi dari mana ? misal: fb, twitter etc..');
            $table->unsignedBigInteger('testimoniable_id');
            $table->string('testimoniable_type');
            $table->integer('rating')->nullable()->comment('Semakin tinggi semakin bagus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('testimonials');
    }
}
