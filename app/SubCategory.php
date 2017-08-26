<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $visible = ['id','name'];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
