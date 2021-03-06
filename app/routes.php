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
Route::get('/', 'StaticController@index');

Route::get('register', ['as' => 'user.create', 'uses' => 'UserController@create']);
Route::post('register', ['as' => 'user.store', 'uses' => 'UserController@store']);
Route::resource('user', 'UserController', ['only' => ['show']]);
if(Auth::check()){
	Route::get('/', "StreamController@index");
} else {
	Route::get('/', 'StaticController@index');
}

Route::group(['before' => 'guest'], function() {
	// Route::resource('user', 'UserController', ['only' => ['show']]);
	Route::get('login', ['as' => 'user.login', 'uses' => 'UserController@login']);
	Route::post('login', ['as' => 'user.signin', 'uses' => 'UserController@postLogin']);
});

Route::group(['before' => 'auth'], function() {
	Route::resource('user', 'UserController', ['only' => ['destroy', 'update']]);
	Route::resource('post', 'PostsController', ['only' => ['create', 'store']]);
	Route::resource('connection', 'UserRelationshipController', ['only' => ['store', 'destroy']]);
	Route::get('logout', 'UserController@logout');
});


Event::listen('illuminate.query', function($sql)
{
    	$queries = DB::getQueryLog();
		$last_query = end($queries);
		Log::info(print_r($last_query, true));
}); 