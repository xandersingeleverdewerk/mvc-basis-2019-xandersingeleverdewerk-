<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        //
        'productname' => $faker->name,
        'description' => $faker->paragraph(25),
        'price' => $faker->randomFloat(2, 1, 99),
        'created_at' => $faker->dateTimeThisDecade( 'now', null),
        'updated_at' => $faker->dateTimeThisDecade( 'now', null)
    ];
});
