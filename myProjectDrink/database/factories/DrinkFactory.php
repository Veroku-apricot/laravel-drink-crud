<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'alcohol_content' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 1),
        'price' => $faker->numberBetween($min = 1, $max = 100)
    ];
});
