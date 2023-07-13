<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function HomePage(){
        return view('v1.Pages.Home');
    }

    function GetPosts(){
        return Post::with('user', 'category')->get();
    }
}
