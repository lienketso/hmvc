<?php

namespace Users\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Config;

class Users extends Authenticatable
{
    protected $table = 'users';

    protected $fillable = ['email','password','full_name','phone','address','remember_token','status','thumbnail'];

    protected $hidden = ['password','remember_token'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function roles()
    {
        return $this->belongsToMany(Config::get('acl.role'), Config::get('acl.role_user_table'), Config::get('acl.user_foreign_key'), Config::get('acl.role_foreign_key'));
    }

    /**
     * Get role name
     * @return null
     */
    public function getRole()
    {
        $roles = $this->roles()->first();
        if (!empty($roles)) {
            return $roles->display_name;
        } else {
            return null;
        }
    }

}
