<?php

use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $recipes = \App\Models\Recipe::all();

        foreach ($recipes as $recipe) {

            $ingredients = factory(\App\Models\RecipeIngredient::class, 5)
                ->create(
                    [
                        'recipe_id' => $recipe['id']
                    ]
                );

        }

    }
}
