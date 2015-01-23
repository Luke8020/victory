<?php

/**
 * Show the home page with all of the dogs
 */
Route::get('/', [
	'as' => 'home_path',
	'uses' => 'DogsController@index'
]);

Route::resource('dogs', 'DogsController');


