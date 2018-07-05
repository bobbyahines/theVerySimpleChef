<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\RecipeIngredient::class, function (Faker $faker) {
    return [

        'recipe_id' => $faker->numberBetween(1,50),
        'name' => $faker->words(2,true),
        'qty' => $faker->numberBetween(0,5),
        'unit' => $faker->word,
        'format' => $faker->word,
    ];
});