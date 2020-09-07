<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freecomp extends Model
{
    public function package ()
    {
        return $this->belongsTo('App\Package', 'package_id', 'uniqid');
    }
    public function user ()
    {
        return $this->belongsTo('App\User', 'user_id');
    }    
}
