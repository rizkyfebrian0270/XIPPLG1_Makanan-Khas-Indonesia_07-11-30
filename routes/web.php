<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/', [HomeController::class, "login"])->name('login');
Route::get('/home', [HomeController::class, "index"])->name('homepage');
