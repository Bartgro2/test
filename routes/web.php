<?php

use App\Http\Controllers\RecipesController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;




Route::get('/recipes', [RecipesController::class, 'index'])->name('recipes.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');








