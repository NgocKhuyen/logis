<?php

use App\Http\Controllers\client\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, "index"])->name('index');
Route::get('/about', [HomeController::class, "about"])->name('about');
Route::get('/contact', [HomeController::class, "contact"])->name('contact');
