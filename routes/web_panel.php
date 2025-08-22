<?php

use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PanelController;
use Illuminate\Support\Facades\Route;

Route::prefix('panell')->name('panel.')->group(function() {
    Route::get('', [PanelController::class, 'index'])->name('home');

    Route::resource('categories', CategoryController::class);
});