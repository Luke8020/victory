<?php

use Victory\Forms\PasswordForm;

class AccountController extends \BaseController {


	public function __construct(PasswordForm $passwordForm)
	{
		$this->passwordForm = $passwordForm;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);

		$section = [
			'title' => 'Account Settings',
			'location' => '/admin/account'
		];

		View::share('section', $section);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /admin/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$user = Auth::user();

		$breadcrumbs = [];

		$pageDescription = 'Click the tab you want to edit, fill out the form and click update to save your changes.';

		return View::make('admin.account.edit')
			->with('pageName', 'Edit Your Account')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('user', $user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		$input = Input::all();

		$rules = [
			'first_name' => 'required',
			'last_name' => 'required',
			'email' => 'required|unique:users,email,'.Auth::user()->id
		];
		$validator = Validator::make(Input::all(), $rules);

		$user = Auth::user();

		$user->first_name = $input['first_name'];
		$user->last_name = $input['last_name'];
		$user->email = $input['email'];

		$user->update();

		Flash::success('Your account was updated.');

		return Redirect::back();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updatePassword()
	{
		$user = Auth::user();

		$input = Input::all();

		if (!Hash::check($input['current_password'], $user->password))
			return Redirect::back()->withErrors('The current password was incorrect.');

		$this->passwordForm->validate($input);
		
		$user->password = Hash::make($input['password']);

		$user->update();

		Flash::success('Your password was updated.');

		return Redirect::back();
	}

}