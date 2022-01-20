<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('profile', function () {
    return view('profile');
})->middleware(['auth','admin']) ->name('profile');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','admin'])->name('dashboard');

require __DIR__.'/auth.php';