<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public function invitation(){
    	return $this->belongsto('App\Models\Invitation');
    }
}
