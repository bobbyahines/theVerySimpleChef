<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeIngredient extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'recipe_ingredients';

    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function recipe() {
        $this->belongsTo('App\Models\Recipe');
    }

}
