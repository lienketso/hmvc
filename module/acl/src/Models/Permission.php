<?php


namespace Acl\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Permission extends Model
{
    protected $table;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('acl.permissions_table');
    }

    public function roles()
    {
        return $this->belongsToMany(Config::get('acl.role'), Config::get('acl.permission_role_table'));
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function($permission) {
            if (!method_exists(Config::get('acl.permission'), 'bootSoftDeletes')) {
                $permission->roles()->sync([]);
            }

            return true;
        });
    }

}
