<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class WelcomeController extends Controller
{
    private function processIngredients($arrayOfIngredients)
    {
        $arrayOfIngredients = explode(',', $arrayOfIngredients);
        $arrayOfIngredients = array_map('trim', $arrayOfIngredients);
        $arrayOfIngredients = array_filter($arrayOfIngredients);
        $arrayOfIngredients = array_unique($arrayOfIngredients);
        $arrayOfIngredients = array_values($arrayOfIngredients);
        $arrayOfIngredients = array_map('strtolower', $arrayOfIngredients);
        return $arrayOfIngredients;
    }

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        return view('welcome');
    }

    public function ingredientsSearch(Request $request)
    {
        // TODO: in cases where two or more ingredients are present and they are not the same, only give foods that contain all the ingredients inclusively.
        $ingredients = $request->input('ingredients');
        $ingredients = $this->processIngredients($ingredients);
        $result_foods = Food::query()
            ->whereHas('ingredients', function (Builder $query) use ($ingredients) {
                $query->whereIn('ing_name', $ingredients);
            })
            ->with('ingredients')
            ->get();

        return view('home', compact('result_foods'));
    }
}
