<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //
    protected $fillable = [
        'location', 'day', 'month', 'time', 'letter', 'user_id'
    ];
    public function guests(){
    	return $this->hasMany('App\Models\Guest');
    }
    public function photos(){
    	return $this->hasMany('App\Models\Photo');
    }

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
}
