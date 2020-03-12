<?php

/** @var Factory $factory */

use App\Comment;
use App\CommentFactory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text(200),
        'date_written' => now(),
        'user_id' => $faker->numberBetween(1, 50),
        'post_id' => $faker->numberBetween(1, 500)
        //
    ];
});
