<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlCategory extends Model
{
   protected $table ='urls_categories';
   protected $fillable=['title','slug','status','description'];

   public function packages()
	{

		 return $this->hasMany('App\Package','url_category','id');
	}
}
