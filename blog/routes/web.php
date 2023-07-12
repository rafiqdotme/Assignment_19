<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;

Route::get('/', [HomeController::class, 'HomePage']);

Route::get('/single', [SingleController::class, 'SinglePage']);