<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
     public function users()
    {
        return $this->belongsToMany('App\User', 'User_roles','role_id','user_id');
    }
}
