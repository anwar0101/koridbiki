<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divition extends Model
{
    protected $visible = ['id','name'];
    
    public function places()
    {
        return $this->hasMany('App\Place');
    }
}
