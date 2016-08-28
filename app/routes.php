<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
	return View::make('city');
});

Route::get('forms', function(){
	return View::make('forms');
});

Route::get('city', function(){
	return View::make('city');
});

Route::get('register', function(){
	return View::make('register');
});

Route::get('login', function(){
	return View::make('login');
});

Route::get('registerPlaces', function(){
	$registerTypes = DB::table('places_types')->lists('name', 'id');
	$cities = DB::table('cities')->lists('name', 'id');
	return View::make('registerPlaces', array('types' => $registerTypes, 'city'=>$cities));
});

Route::get('lugar/agregar', function(){
	$registerTypes = DB::table('places_types')->lists('name', 'id');
	$cities = DB::table('cities')->lists('name', 'id');
	return View::make('registerPlaces', array('types' => $registerTypes, 'city'=>$cities));
});

Route::post('save_place', array('uses' => 'PlacesController@savePlace'));

Route::get('municipios', function(){
	$region['name'] = "Norte";
	return View::make('cities', array('region' => $region));
});

Route::get('municipios', array('uses' => 'CitiesController@selectCities'));
Route::get('indicadores', array('uses' => 'PlacesController@getIndicators'));

Route::get('region/{id}', array('uses' => 'CitiesController@selectCitiesofRegion'));
Route::get('municipios/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCity'));
Route::get('places/{id_type}/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCityAndType'));