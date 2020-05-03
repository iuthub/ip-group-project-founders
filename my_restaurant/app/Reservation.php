<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name', 'email', 'date', 'time', 'people_count'];
    
}
