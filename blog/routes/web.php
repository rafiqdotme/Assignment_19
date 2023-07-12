<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'HomePage']);

Route::get('/register', [UserController::class, 'UserPage']);
Route::post('/UserRegistration', [UserController::class, 'UserRegistration']);
Route::post('/UserLogin', [UserController::class, 'UserLogin']);

Route::get('/single', [SingleController::class, 'SinglePage']);
Route::get('/GetSinglePost', [SingleController::class, 'GetSinglePost']);

