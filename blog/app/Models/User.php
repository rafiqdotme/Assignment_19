<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['fName', 'lName', 'email', 'password', 'otp'];
    protected $attributes = [
        'otp'   =>'0'
    ];
}
