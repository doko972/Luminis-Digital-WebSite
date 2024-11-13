<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Routes publiques
Route::get('/', [HomeController::class, 'index'])->name('home');
