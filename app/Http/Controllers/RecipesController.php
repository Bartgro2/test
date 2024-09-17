<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function index()
    {
        // Fetch all categories
        $categories = Category::all();

        // Fetch all recipes
        $recipes = Recipe::all();

        return view('recipes.index', compact('categories', 'recipes'));
        }
}