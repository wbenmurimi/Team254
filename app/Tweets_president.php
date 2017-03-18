<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweets_president extends Model
{
    

    /**
     * tweets_president belongs to a Candidate
     *
     * @var array
     */
    protected $table = "tweets_presidents";

    public function candidate()
    {
        return $this->belongsTo('App\Candidate');
    }  
}
