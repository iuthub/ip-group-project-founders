<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function getMenu()
    {
        return view('menu');
    }

    public function getAbout()
    {
    	return view('pages.about');
    }

    public function getReservation()
    {
    	return view('pages.reservation');
    }

    public function getHome()
    {
    	return view('pages.index');
    }

    public function postReservation()
    {
    	return view('pages.index');
    }

}

