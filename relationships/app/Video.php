<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function comments(){
        return $this->MorphMany(Comment::class, 'commentable');
    }
}
