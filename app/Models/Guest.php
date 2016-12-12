<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //Many guests belongs to many invitation
    public function invitation(){
    	return $this->hasOne('App\Models\Invitation');
    }
}
