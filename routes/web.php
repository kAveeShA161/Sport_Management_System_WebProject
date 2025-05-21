<?php

// Removed duplicate use statement for Route
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('/login');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//     | You may specify the options for password reset here, such as the view



Route::get('/', function () {
    return view('landing'); // 👈 Loads your Bootstrap homepage
});
