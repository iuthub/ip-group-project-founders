<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;
use App\Category;
use Illuminate\Support\Facades\Auth;

class MenusController extends Controller
{
    public function index()
    {
        if (!$this->itsDefinitelyAdmin()) {
            return redirect()->route('getHome')->with('error', 'You cannot access this page!');
        }
    	
        return view('menu.addmenu')->with('categories', Category::all());
    }

    public function create()
    {	
        if (!$this->itsDefinitelyAdmin()) {
            return redirect()->route('getHome')->with('error', 'You cannot access this page!');
        }

    	return view('menu.create', [
            'categories' => $this->getCategoriesAsArray()
        ]);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title'=>'required',
    		'body'=>'required',
            'cost'=>'required',
            'cover_img'=>'image|nullable|max:1999',
            'category'=>'required',
    	]);
    	
        if ($request->hasFile('cover_img')){
        $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_img')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_img')->storeAs('public/cover_imgs', $fileNameToStore);
        } else {
            $fileNameToStore='noimage.jpg';
        }

        $menu = new Menu;
    	$menu->title = $request->input('title');
        $menu->cost = $request->input('cost');
    	$menu->body = $request->input('body');
        $menu->cover_img=$fileNameToStore;
        $menu->category_id = $request->input('category');
    	$menu->save();

    	return redirect()->route('getAddMenu')->with('success', 'New Food Added To Menu!');
    }

    public function edit($id)
    {
        if (!$this->itsDefinitelyAdmin()) {
            return redirect()->route('getHome')->with('error', 'You cannot access this page!');
        }

    	$menu = Menu::find($id);
    	return view("/menu.edit", [
            'categories' => $this->getCategoriesAsArray(),
            'menu' => $menu
        ]);
    }

    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'title'=>'required',
    		'body'=>'required',
            'cost'=>'required',
            'cover_img'=>'image|nullable|max:1999',
            'category'=>'required',
    	]);

        if ($request->hasFile('cover_img')){
        $filenameWithExt = $request->file('cover_img')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('cover_img')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        $path = $request->file('cover_img')->storeAs('public/cover_imgs', $fileNameToStore);
    	}

    	$menu = Menu::find($id);
    	$menu->title = $request->input('title');
    	$menu->body = $request->input('body');
        $menu->cost = $request->input('cost');
        $menu->category_id = $request->input('category');

        if ($request->hasFile('cover_img')) {
            $menu->cover_img=$fileNameToStore;
        }
    	$menu->save();

    	return redirect()->route('getAddMenu')->with('success', 'Updated!');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu->cover_img!='noimage.jpg') {
            Storage::delete('public/cover_imgs/'.$menu->cover_img);
        }
    	$menu->delete();
    	return redirect()->route('getAddMenu')->with('success', 'Successfully deleted!');
    }

    private function getCategoriesAsArray()
    {
        $categories = Category::all();
        $categoriesArr = [];
        foreach ($categories as $category) {
            $categoriesArr[$category->id] = $category->kind;
        }

        return $categoriesArr;
    }

    private function itsDefinitelyAdmin()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

}
