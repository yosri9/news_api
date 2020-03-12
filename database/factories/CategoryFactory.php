<?php

/** @var Factory $factory */

use App\Category;
use App\CategoryFactory;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'title' => $faker->title
        //
    ];
});
