<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// 3 Route Kustom[cite: 1]
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

// Bonus: Route Parameter[cite: 1]
Route::get('/hello/{nama}', [PageController::class, 'hello']);