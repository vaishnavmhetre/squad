<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'user_id' =>
            \App\User::first() == null
                ? factory(\App\User::class)->create()->id
                : \App\User::first()->id
    ];
});
