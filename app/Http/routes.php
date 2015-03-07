<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

//Route::get('draft', 'DraftController@index');
//Route::get('draft/create', 'DraftController@create');
//Route::post('draft', 'DraftController@store');
//Route::get('draft/{draft}', 'DraftController@show');
Route::resource('draft', 'DraftController');
Route::get('draft/{draft}/players', 'DraftController@showUsers');
Route::post('draft/{draft}/players', 'DraftController@addUser');
Route::get('draft/{draft}/quit', 'DraftController@quitDraft');
Route::get('draft/{draft}/movies', 'DraftController@showMovies');
Route::post('draft/{draft}/movies', 'DraftController@addMovies');
Route::get('draft/{draft}/removeMovie/{movie}', 'DraftController@removeMovie');
Route::post('draft/{draft}/bid/{draftBoard}', 'DraftController@makeBid');


Route::get('movies/{id}', 'MovieController@show');
Route::get('movies', 'MovieController@index');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
