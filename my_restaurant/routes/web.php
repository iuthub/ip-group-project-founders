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
	'uses' => 'RestaurantController@addMenu',
	'as' => 'getAddMenu']);