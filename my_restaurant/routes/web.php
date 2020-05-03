<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [
	'uses' => 'RestaurantController@getHome',
	'as' => 'getHome'	
]);

Route::get('/menu', [
	'uses' => 'RestaurantController@getMenu',
	'as' => 'getMenu']);

Route::get('/about', [
	'uses' => 'RestaurantController@getAbout',
	'as' => 'getAbout']);

Route::get('/reservation', [
	'uses' => 'RestaurantController@getReservation',
	'as' => 'getReservation']);

Route::post('/reservation', [
	'uses' => 'RestaurantController@postReservation',
	'as' => 'postReservation']);

Route::get('/addmenu', [
	'uses' => 'MenusController@index',
	'as' => 'getAddMenu']);

Route::post('/addmenu', [
	'uses' => 'MenusController@store',
	'as' => 'storeMenu']);

Route::get('/addmenu/create', [
	'uses' => 'MenusController@create',
	'as' => 'createMenu']);

Route::put('/addmenu/{id}', [
	'uses' => 'MenusController@update',
	'as' => 'updateMenu']);

Route::delete('/addmenu/{id}', [
	'uses' => 'MenusController@destroy',
	'as' => 'destroyMenu']);

Route::get('/addmenu/{id}/edit', [
	'uses' => 'MenusController@edit',
	'as' => 'editMenu']);







