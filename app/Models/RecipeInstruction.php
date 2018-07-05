<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecipeInstruction extends Model
{

    use SoftDeletes;

    protected $connection = 'mysql';

    protected $table = 'recipe_instructions';

    protected $dates = ['deleted_at'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

}
