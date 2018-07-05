<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Recipe::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->sentence,
        'prep_time' => $faker->numberBetween(0,20),
        'cook_time' => $faker->numberBetween(0,90),
        'url' => $faker->url
    ];
});