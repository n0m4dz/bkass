<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = [
        'title', 'content'
    ];

    function user()
    {
        return $this->belongsTo('App\User', 'author', 'id');
    }
}
