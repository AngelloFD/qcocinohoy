<?php

namespace Database\Factories;

use App\Models\Food;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FoodIngredientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'food_id' => fake()->randomElement(Food::all()->pluck('id')->toArray()),
            'ingredient_id' => fake()->randomElement(Ingredient::all()->pluck('id')->toArray()),
        ];
    }
}
