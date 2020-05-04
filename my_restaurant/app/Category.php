<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['kind'];
    public function menus(){
    	return $this->hasMany('App\Menu');
    }
}
