<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','password','groom_firstname','groom_lastname','bride_firstname','bride_lastname', 'groom_mobile', 'bride_mobile', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function invitations(){
        return $this->hasMany('App\Models\Invitation');
    }
}
