<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'publisher', 'complete'];

    function setCompleteAttribute($value)
    {
        $this->attributes['complete'] = $value ?: 0;
    }
}
