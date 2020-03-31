<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title'        => $faker->sentence(8, true),
        'slug'         => Str::slug($faker->sentence(5, true), '-') . '_' . Str::random(5),
        'description'  => $faker->paragraph(2, true),
        'keywords'     => $faker->sentence(4, true),
        'content'      => $faker->paragraph(50, true),
        'category_id'  => $faker->numberBetween(1, 14),
        'user_id'      => $faker->numberBetWeen(1, 3),
        'hit'          => $faker->numberBetween(50, 400),
        'status_id'    => 1,
    ];
});
