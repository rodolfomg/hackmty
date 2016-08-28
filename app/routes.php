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

Route::get('municipios', function(){
	$region['name'] = "Norte";
	return View::make('cities', array('region' => $region));
});

//Route::get('municipios', array('use','CitiesController@loadCities'));

//Route::get('municipios/{id}', array('use','CitiesController@loadCity'));