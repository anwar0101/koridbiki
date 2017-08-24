<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

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

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function getIsFavoritedAttribute()
    {
        return count($this->favorites()->where('user_id', Auth::id())->get()) != 0;
    }
}
