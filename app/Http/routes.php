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

Route::get('home', 'MyController@index');

Route::get('about','WelcomeController@about');

Route::get('test','WelcomeController@test');
Route::get('article/create','MyController@cre');

Route::get('article/{id}','MyController@articlescont');
Route::post('articles','MyController@store');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
