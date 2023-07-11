<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('v1.Pages.Home');
});