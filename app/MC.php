<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MC extends Model
{
	protected $table="multi_competition";
    public function products()
	{

		 return $this->hasMany('App\Package','mc_id');
	}
	public function ticket()
	{
		return $this->hasMany('App\Ticket','mc_id');
	}
}
