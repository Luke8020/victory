<?php

/**
 * Show the home page with all of the dogs
 */
Route::get('/', [
	'as' => 'home_path',
	'uses' => 'DogsController@index'
]);

Route::resource('dogs', 'DogsController');

/**
 * Show the form for logging a user in
 */
Route::get('/login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

/**
 * Attempt to log a user in
 */
Route::post('/login', [
	'uses' => 'SessionsController@store'
]);

/**
 * Log the current user out
 */
Route::get('logout', [
	'as' => 'logout_path',
	'uses' => 'SessionsController@destroy'
]);

/********************** Administrator Routes ************************/

Route::group(['before' => 'auth', 'prefix' => 'admin'], function()
{

	Route::resource('/', 'AdminController');

	/**
	 * Show a dog's details
	 */
	Route::get('/dogs/{id}', [
		'uses' => 'AdminController@show'
	]);

	/**
	 * Attempt to create a new dog
	 */
	Route::post('/create', [
		'uses' => 'AdminController@store'
	]);

	/**
	 * Show the form for editting a dog's details
	 */
	Route::get('/dogs/{id}/edit', [
		'uses' => 'AdminController@edit'
	]);

	/**
	 * Attempt to update a dog's details
	 */
	Route::post('/dogs/{id}/edit', [
		'uses' => 'AdminController@update'
	]);

	/**
	 * Attempt to delete a dog
	 */
	Route::post('/dogs/{id}', [
		'uses' => 'AdminController@destroy'
	]);

});
