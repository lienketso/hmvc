<?php

namespace Post\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable = ['title','slug','description','content','thumbnail','status','created_at','updated_at'];
}
