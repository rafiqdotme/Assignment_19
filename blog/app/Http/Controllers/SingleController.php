<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    function SinglePage(){
        return view('v1.Pages.Single');
    }
}
