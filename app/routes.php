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

Route::post('municipios', function(){
	$region['name'] = "Norte";
	return View::make('cities', array('region' => $region));
});

Route::get('municipios', array('uses' => 'CitiesController@selectCities'));

Route::get('municipios/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCity'));
Route::get('municipios/{id_type}/{id_city}', array('uses' => 'PlacesController@selectPlacesOfCityAndType'));