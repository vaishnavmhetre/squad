<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'post_id' => \App\Post::first() == null ? factory(\App\Post::class)->create()->id : \App\Post::all()->random(1)[0]->id,
        'user_id' => \App\User::first() == null ? factory(\App\User::class)->create()->id : \App\User::all()->random(1)[0]->id
    ];
});
