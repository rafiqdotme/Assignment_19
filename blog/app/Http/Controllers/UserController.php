<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function UserPage(Request $request){
        return view('v1.Pages.Register');
    }

    function UserLogin(Request $request){

    }

    function UserRegistration(Request $request){
        return User::create($request->input());
    }

    function SendOtpToEmail(Request $request){

    }

    function OTPVerify(Request $request){

    }

    function SetPassword(Request $request){

    }
}
