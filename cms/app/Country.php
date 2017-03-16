<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){

        return $this->hasManyThrough('App\Post', 'App\User');

    }

    public function photo()
    {
        return $this->morphMany('App\Photo', 'imageable');
    }
}
