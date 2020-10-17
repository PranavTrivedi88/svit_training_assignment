<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body'];
    // protected $guarded = [];

    // public function getRouteKeyName(){
    //     return 'title';
    // }

    //title = "Post 4"
    //body = "This is the fourth post"
    //subscription = true
}
