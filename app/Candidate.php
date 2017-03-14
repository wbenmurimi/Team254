<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
  
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alert_via', 'sale_rent', 'county',
    ];

 
    
 /**
     * Candidate belongs to a user
     *
     * @var array
     */

    public function user()
    {
        return $this->belongsTo('App\User');
    }  
}
