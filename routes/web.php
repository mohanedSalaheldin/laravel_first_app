<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('client.pages.home');
})->name('home');


Route::prefix('auth')->group(function () {
    Route::get('/login', function () {
        return view('client.pages.auth.login');
    })->name('login');
    Route::get('/register', function () {
        return view('client.pages.auth.register');
    })->name('register');
});

// Route::get('/', function () {
//     return view('client.pages.home');
// })->name('home');
