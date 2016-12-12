<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    //
    public function guest(){
    	return $this->belongsto('App\Models\Guest');
    }
}
