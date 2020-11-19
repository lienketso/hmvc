<?php

namespace Users\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = ['email','password','full_name','phone','address','remember_token','status','thumbnail'];

    protected $hidden = ['password','remember_token'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

}
