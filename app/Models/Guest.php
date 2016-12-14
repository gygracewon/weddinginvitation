<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
	 protected $fillable = [
        'usercode', 'first_name', 'last_name', 'user_id'
    ];
    //Many guests belongs to many invitation
    public function invitation(){
    	return $this->belongsTo('App\Models\Invitation');
    }
    public function user(){
    	return $this->belongsTo('App\Models\User');
    }

}
