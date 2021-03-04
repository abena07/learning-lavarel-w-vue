<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;
use App\User;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        // 'id' => $faker->name,
        'user_id' => 'factory:App\User',

    'post_title' => $faker->sentence,
    'post_slug' => $faker->paragraph(20),

        //
    ];
});
