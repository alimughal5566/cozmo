<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    protected $table="writers";
    protected $fillable = ['title','phone','soft_delete'];
}
