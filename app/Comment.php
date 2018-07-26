<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post(){
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
