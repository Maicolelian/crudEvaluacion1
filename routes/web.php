<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimaleController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('animales', AnimaleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\AnimaleController::class, 'index'])->name('home');
