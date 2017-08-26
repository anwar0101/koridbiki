<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $visible = ['id','name'];
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function place()
    {
        return $this->belongsTo('App\Divition');
    }
}
