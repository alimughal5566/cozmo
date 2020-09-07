<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Related_product extends Model
{
   public function package()
	{

		 return $this->belongsTo('App\Package','related_product_id');
	}
	public function images()
	{

		 return $this->hasMany('App\PaksageImage','package_id','related_product_id');
	}
}

