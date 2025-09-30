<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('index.page');
Route::get('/about', [HomeController::class, 'about'])->name('about.page');
Route::get('/login', [HomeController::class, 'login'])->name('login.page');
Route::get('/register', [HomeController::class, 'register'])->name('register.page');