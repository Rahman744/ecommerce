<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CategoryController;

Route::get('/', [MainController::class, 'home']);
Route::get('/categories', [MainController::class, 'categories']);


Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('categories.show');