<?php

namespace Database\Seeders;

use App\Models\FoodIngredients;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodIngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodIngredients::factory(10)->create();
    }
}
