<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [

    ];

    public function place()
    {
        return $this->belongsTo('App\Place');
    }

    public function sub_category()
    {
        return $this->belongsTo('App\SubCategory');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
