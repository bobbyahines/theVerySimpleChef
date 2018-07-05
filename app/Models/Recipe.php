<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{

    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'recipes';

    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    /**
     * DB Relationships
     */

    public function recipeIngredients()
    {
        $this->hasMany('App\Models\RecipeIngredient');
    }

//    public function instructions()
//    {
//        $this->hasMany('App\Models\RecipeInstruction');
//    }

}
