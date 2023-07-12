<?php
namespace App\Helpers;


class JWTToken{
    public static function CreateToken($userID){
        $key = env('JWT_KEY');

        $payload = [
            'iss'   =>"laravel-jwt",
            'iat'   =>time(),
            'exp'   =>time() + 60*60,
            'user'  =>$userID,
        ];

        return JWT::encode($payload, $key);
    }
}