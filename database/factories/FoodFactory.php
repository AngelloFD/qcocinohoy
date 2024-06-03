<?php

namespace Database\Factories;

use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'food_image' => $this->faker->imageUrl(),
            'food_name' => fake()->randomElement(['Pizza', 'Hamburguesa', 'Hot Dog', 'Taco', 'Burrito', 'Sushi', 'Pasta', 'Ensalada', 'Sopa', 'Sandwich']),
            'food_description' => $this->faker->sentence(),
            'food_preparation_time' => fake()->randomElement(['10 minutos', '20 minutos', '30 minutos', '40 minutos', '50 minutos', '60 minutos']),
            'food_recipe' => $this->faker->paragraph(),
        ];
    }
}
