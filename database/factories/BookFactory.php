<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->name,
        'description' => $faker->paragraph(25),
        'isbn' => $faker->name,
        'category_id' => \App\Category::all()->random()->id,
        'user_id' => \App\User::all()->random()->id,
        'created_at' => $faker->dateTimeThisDecade( 'now', null),
        'updated_at' => $faker->dateTimeThisDecade( 'now', null)
    ];
});
