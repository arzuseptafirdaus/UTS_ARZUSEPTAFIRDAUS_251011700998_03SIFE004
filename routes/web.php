<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportController;

Route::get('/', [SportController::class, 'home'])->name('home');
Route::get('/about', [SportController::class, 'about'])->name('about');
Route::get('/regulations', [SportController::class, 'regulations'])->name('regulations');
Route::get('/sport', [SportController::class, 'index'])->name('sport');
Route::get('/profile', [SportController::class, 'profile'])->name('profile');
Route::get('/sport/{id}', [SportController::class, 'show'])->name('sport.detail');