<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = ['ing_name'];
    public function foods()
    {
        return $this->belongsToMany(Food::class, 'food_ingredients', 'ingredient_id', 'food_id');
    }
}
