<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * A user has many candidates.
     *
     * @var array
     */

    public function candidate()
    {
        return $this->hasMany('App\Candidate');
    }


      /**
     * A user has madmin rights
     *
     * @var array
     */
 public function roles()
    {
        return $this->belongsToMany('App\Role', 'User_roles','user_id','role_id');
    }


    public function hasAnyRole($roles)
    {

        if (is_array($roles)) {
         foreach ($roles as $role) {
             if( $this->hasRole($role))
             {
                return true;
             }
         }

        }
        else
        {
             if( $this->hasRole($role))
             {
                return true;
             }   
        }
         return false;
    }

     public function hasRole($role)
    {

        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }
            return false;
   }
}
