<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenusController extends Controller
{
    public function index()
    {
    	 $menus =  Menu::orderBy('created_at', 'desc')->paginate(10);
    	 return view('menu.addmenu')->with('menus', $menus);
    }

    public function create()
    {	
    	return view('menu.create');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title'=>'required',
    		'body'=>'required'
    	]);
    	
    	$menu = new Menu;
    	$menu->title = $request->input('title');
    	$menu->body = $request->input('body');
    	$menu->save();

    	return redirect('/addmenu')->with('success', 'Ovqat Kowildi!');
    }

    public function edit($id)
    {
    	$menu = Menu::find($id);
    	return view("/menu.edit")->with('menu', $menu);
    }

    public function show($id)
    {
    	//
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'title'=>'required',
    		'body'=>'required'
    	]);
    	
    	$menu = Menu::find($id);
    	$menu->title = $request->input('title');
    	$menu->body = $request->input('body');
    	$menu->save();

    	return redirect('/addmenu')->with('success', 'Update Atding!');
    }

    public function destroy($id)
    {
    	$menu = Menu::find($id);
    	$menu->delete();
    	return redirect('/addmenu')->with('success', 'Ovqatni ochirding, xarobing chiqmagay!');
    }
}
