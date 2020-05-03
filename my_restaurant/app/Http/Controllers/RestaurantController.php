<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class RestaurantController extends Controller
{
    public function getMenu()
    {
        $menus =  Menu::orderBy('created_at', 'desc')->paginate(10);
         return view('menu')->with('menus', $menus);
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

