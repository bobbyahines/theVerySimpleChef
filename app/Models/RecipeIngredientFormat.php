<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeIngredientFormat extends Model
{

    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'recipe_ingredient_formats';

    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
