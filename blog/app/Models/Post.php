<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['postTitle', 'postSlug', 'postImg', 'postDesc', 'catId', 'userId'];

    function user(){
        return $this->belongsTo(User::class);
    }

    function category(){
        return $this->belongsTo(Category::class);
    }
}
