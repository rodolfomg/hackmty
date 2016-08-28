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
	return View::make('hello');
});

Route::get('forms', function(){
	return View::make('forms');
});

Route::get('registerPlaces', function(){
	$registerTypes = DB::table('places_types')->lists('name', 'id');
	$cities = DB::table('cities')->lists('name', 'id');
	return View::make('registerPlaces', array('types' => $registerTypes, 'city'=>$cities));
});

Route::get('municipios', function(){
	$region['name'] = "Norte";
	return View::make('cities', array('region' => $region));
});

Route::get('municipios', array('uses' => 'CitiesController@selectCities'));
Route::get('indicadores', array('uses' => 'PlacesController@getIndicators'));

Route::get('municipios/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCity'));
Route::get('places/{id_type}/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCityAndType'));