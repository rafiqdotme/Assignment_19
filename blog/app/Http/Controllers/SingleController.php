<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SingleController extends Controller
{
    function SinglePage(){
        return view('v1.Pages.Single');
    }


    function GetSinglePost(Request $request){
        return Post::get()->first();
    }
}
