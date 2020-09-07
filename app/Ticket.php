<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function package()
	{

		 return $this->belongsTo('App\Package','product_id');
	}
}
