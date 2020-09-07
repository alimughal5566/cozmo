<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   protected $table ='cart';
   protected $fillable=['package_id','ticket_id','user_id'];

   public function package()
	{

		 return $this->belongsTo('App\Package');
	}
	public function ticket()
	{

		 return $this->belongsTo('App\Ticket');
	}

}
