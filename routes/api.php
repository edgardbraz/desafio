<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'Api\UserController@login');

Route::post('register', 'Api\UserController@store');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('users', 'Api\UserController@index')->middleware('is_admin');
	Route::get('users/{user}', 'Api\UserController@show')->middleware('is_admin');
	Route::put('users/{user}', 'Api\UserController@update')->middleware('is_admin');
	Route::delete('users/{user}', 'Api\UserController@destroy')->middleware('is_admin');
	Route::put('users/{user}/reset_password', 'Api\UserController@resetPassword')->middleware('is_admin');
});