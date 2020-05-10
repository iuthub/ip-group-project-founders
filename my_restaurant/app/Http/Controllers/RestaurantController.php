<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Reservation;
use Illuminate\Support\Facades\Auth;
use App\Menu;
use App\Category;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{
    public function getMenu()
    {   

     //   $menus =  Menu::orderBy('created_at', 'desc')->get();
        return view('pages.menu')->with('categories', Category::all());

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

    public function postReservation(Request $req)
    {
         Validator::make($req->all(), [
            'email'=>['required', 'string', 'email', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'date' => 'required',
            'time' => 'required',
            'people_count' => 'required'
         ]);
         
        $date = Carbon::createFromFormat('Y-m-d', $req->input('date'));
        $time = Carbon::createFromFormat('g:ia', $req->input('time'));
        $reservation = new Reservation([
            'name' => $req->input('name'),
            'email' => $req->input('email'),
            'date' => $date,
            'time' => $time,
            'people_count' => $req->input('people_count') 
        ]);

        $reservation->save();

        if (!$this->itsDefinitelyAdmin()) {
            return view('pages.index', [ 
                'reservation' => $reservation
            ]);
        }

        return redirect()->route('getAdminReservation')->with([
            'info'=>'Reservation was created'
        ]);;
    }

    public function getAdminReservation()
    {
        if (!$this->itsDefinitelyAdmin()) {
          return redirect()->back()->with([
            'error' => 'You cannot access this part!'
        ]);
        }

        return view('admin.reservation', [
            'reservations' => Reservation::all()
        ]);
    }

    public function getDeleteReservation($id)
    {
        if (!$this->itsDefinitelyAdmin()) {
          return redirect()->back()->with([
            'error' => 'You cannot access this part!'
        ]);
        }

        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('getAdminReservation')->with([
            'info' => 'Task was deleted!'
        ]);

    }

    private function itsDefinitelyAdmin()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

}

