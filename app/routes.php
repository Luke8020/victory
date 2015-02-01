<?php

/*
|--------------------------------------------------------------------------
| Main Controller Routes
|--------------------------------------------------------------------------
*/

/**
 * Show the home page with all of the dogs, puppies, and blogposts
 */
Route::get('/', [
	'as' => 'home_path',
	'uses' => 'MainController@index'
]);

/**
 * Show the details for a specified dog
 */
Route::get('/dogs/{id}', [
	'uses' => 'MainController@showDog'
]);

/**
 * Show the details for a specified blogpost
 */
Route::get('/blogposts/{id}', [
	'uses' => 'MainController@showBlogPost'
]);

/**
 * Show the details for a specified puppy
 */
Route::get('/puppies/{id}', [
	'uses' => 'MainController@showPuppy'
]);

/**
 * Show the details for a specified puppy
 */
Route::post('/', [
	'uses' => 'MainController@contact'
]);

/**
 * Show the details for a specified puppy
 */
Route::get('/test', function() {
	return View::make('victory.layouts.test');
});

/**
 * Show the details for a specified puppy
 */
Route::get('/seed', function() {
	return View::make('victory.layouts.seeder');
});

/**
 * Show the details for a specified puppy
 */
Route::get('/array', function() {
	return View::make('victory.layouts.array');
});

/*
|--------------------------------------------------------------------------
| Sessions Controller Routes
|--------------------------------------------------------------------------
*/

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
	
	Route::get('/', function()
	{
		return Redirect::to('/admin/dogs');
	});

	/*
	|--------------------------------------------------------------------------
	| Dog Form Post Routes CREATE/UPDATE/DESTROY
	|--------------------------------------------------------------------------
	*/

	// /**
	//  * Attempt to create a new dog
	//  */
	Route::post('dogs/create', [
		'uses' => 'DogsController@store'
	]);

	/**
	 * Attempt to update a dog's info
	 */
	Route::post('/dogs/{id}/edit', [
		'as' => 'dog_update_path',
		'uses' => 'DogsController@update'
	]);

	/**
	 * Attempt to update a dog's pedigree
	 */
	Route::post('/dogs/{id}/edit-pedigree', [
		'as' => 'dog_update_pedigree_path',
		'uses' => 'DogsController@updatePedigree'
	]);

	/**
	 * Attempt to delete a dog
	 */
	Route::post('/dogs/{id}', [
		'uses' => 'DogsController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Dog Pictures Post Form Routes
	|--------------------------------------------------------------------------
	*/

	/**
	 * Update a dog's main picture
	 */
	Route::post('/dogs/{id}/edit-main-picture', [
		'as' => 'dog_main_picture_path',
		'uses' => 'DogPicturesController@updateMain'
	]);

	/**
	 * Add to dog's associated pictures
	 */
	Route::post('/dogs/{id}/edit-pictures', [
		'as' => 'dog_add_pictures_path',
		'uses' => 'DogPicturesController@update'
	]);

	/**
	 * Add to dog's associated pictures
	 */
	Route::post('/dogs/{id}/delete-pictures', [
		'as' => 'dog_delete_pictures_path',
		'uses' => 'DogPicturesController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Puppy Form Post Routes CREATE/UPDATE/DESTROY
	|--------------------------------------------------------------------------
	*/

	/**
	 * Attempt to create a new puppy
	 */
	Route::post('/puppies/create', [
		'uses' => 'PuppiesController@store'
	]);

	/**
	 * Attempt to update a puppy's info
	 */
	Route::post('/puppies/{id}/edit', [
		'as' => 'puppy_update_path',
		'uses' => 'PuppiesController@update'
	]);

	/**
	 * Attempt to delete a puppy
	 */
	Route::post('/puppies/{id}', [
		'uses' => 'PuppiesController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Puppy Pictures Post Form Routes
	|--------------------------------------------------------------------------
	*/

	/**
	 * Add to puppy's associated pictures
	 */
	Route::post('/puppies/{id}/edit-pictures', [
		'as' => 'puppy_add_pictures_path',
		'uses' => 'PuppyPicturesController@update'
	]);

	/**
	 * Add to puppy's associated pictures
	 */
	Route::post('/puppies/{id}/delete-pictures', [
		'as' => 'puppy_delete_pictures_path',
		'uses' => 'PuppyPicturesController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Blog Post Form Post Routes CREATE/UPDATE/DESTROY
	|--------------------------------------------------------------------------
	*/

	/**
	 * Attempt to create a new blog post
	 */
	Route::post('/blogposts/create', [
		'uses' => 'BlogPostsController@store'
	]);

	/**
	 * Attempt to update a blog post's info
	 */
	Route::post('/blogposts/{id}/edit', [
		'as' => 'blogpost_update_path',
		'uses' => 'BlogPostsController@update'
	]);

	/**
	 * Attempt to delete a blog post
	 */
	Route::post('/blogposts/{id}', [
		'uses' => 'BlogPostsController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Blog Post Pictures Post Form Routes
	|--------------------------------------------------------------------------
	*/

	/**
	 * Update a blog post's main picture
	 */
	Route::post('/blogposts/{id}/edit-main-picture', [
		'as' => 'blogpost_main_picture_path',
		'uses' => 'BlogPostPicturesController@updateMain'
	]);

	/**
	 * Add to blog post's associated pictures
	 */
	Route::post('/blogposts/{id}/edit-pictures', [
		'as' => 'blogpost_add_pictures_path',
		'uses' => 'BlogPostPicturesController@update'
	]);

	/**
	 * Add to blog post's associated pictures
	 */
	Route::post('/blogposts/{id}/delete-pictures', [
		'as' => 'blogpost_delete_pictures_path',
		'uses' => 'BlogPostPicturesController@destroy'
	]);

	/*
	|--------------------------------------------------------------------------
	| Account Settings Form Routes
	|--------------------------------------------------------------------------
	*/

	/**
	 * Attempt to create a new blog post
	 */
	Route::get('/account', [
		'uses' => 'AccountController@edit'
	]);

	/**
	 * Attempt to update a blog post's info
	 */
	Route::post('/account', [
		'as' => 'account_update_path',
		'uses' => 'AccountController@update'
	]);

	/**
	 * Attempt to delete a blog post
	 */
	Route::post('/account/password', [
		'as' => 'password_update_path',
		'uses' => 'AccountController@updatePassword'
	]);

	Route::resource('dogs', 'DogsController');
	Route::resource('puppies', 'PuppiesController');
	Route::resource('blogposts', 'BlogPostsController');

});
