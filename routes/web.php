<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', [WeatherController::class, 'index'])->name('home');
Route::get('/about', [WeatherController::class, 'about'])->name('about');
Route::get('/contact', [WeatherController::class, 'contact'])->name('contact');
