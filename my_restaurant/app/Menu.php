<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['title', 'body', 'cost', 'cover_img'];
    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
