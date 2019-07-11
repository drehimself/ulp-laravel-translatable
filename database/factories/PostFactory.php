<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence(6);

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'body' => $faker->realText,
    ];
});
