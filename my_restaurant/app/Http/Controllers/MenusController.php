<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;
use App\Category;

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
        }else{
            $fileNameToStore='noimage.jpg';
        }
        $category = new Category(['kind'=>$request->input('category')]);
        $category->save();
        $menu = new Menu;
        $menu->category()->associate($category);
    	$menu->title = $request->input('title');
        $menu->cost = $request->input('cost');
    	$menu->body = $request->input('body');
        $menu->cover_img=$fileNameToStore;
    	$menu->save();

    	return redirect('/addmenu')->with('success', 'New Food Added To Menu!');
    }

    public function edit($id)
    {
    	$menu = Menu::find($id);
    	return view("/menu.edit")->with('menu', $menu);
    }
    public function update(Request $request, $id)
    {
    	$this->validate($request, [
    		'title'=>'required',
    		'body'=>'required',
            'cost'=>'required',
            'cover_img'=>'image|nullable|max:1999'
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
        $value = $menu->category_id;
        $category = Category::find($value);
        $category->kind = $request->input('category');
        $category->save();


        if ($request->hasFile('cover_img')) {
            $menu->cover_img=$fileNameToStore;
        }
    	$menu->save();

    	return redirect('/addmenu')->with('success', 'Updated!');
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu->cover_img!='noimage.jpg') {
            Storage::delete('public/cover_imgs/'.$menu->cover_img);
        }
        $id_of_category = $menu->category_id;
        $category = Category::find($id_of_category);

        $category->delete();
    	$menu->delete();
    	return redirect('/addmenu')->with('success', 'Successfully deleted!');
    }
}
