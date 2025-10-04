<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index.page');
Route::get('/about', [HomeController::class, 'about'])->name('about.page');
Route::get('/login', [HomeController::class, 'login'])->name('login.page');
Route::get('/register', [HomeController::class, 'register'])->name('register.page');
Route::get('/bidder-registration', [HomeController::class, 'bidder_registration'])->name('bidder.registration');
Route::post('/register', [UserController::class, 'register'])->name('register.form');

Route::get('/view-now', function () {
    $details = [
        'fullname' => 'John Doe',
        'email' => 'john@example.com',
        'username' => 'johndoe'
    ];

    return view('emails.registration', $details);
});
