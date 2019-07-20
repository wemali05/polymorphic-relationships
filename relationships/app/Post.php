<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->MorphMany(Comment::class, 'commentable');
    }
}
