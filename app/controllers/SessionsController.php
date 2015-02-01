<?php

use Victory\Forms\SessionForm;

class SessionsController extends \BaseController {


	public function __construct(SessionForm $sessionForm)
	{
		$this->sessionForm = $sessionForm;

		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for logging in
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin.sessions.create');
	}

	/**
	 * Log a user in
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('email', 'password');

		$this->sessionForm->validate($input);

		$remember = Input::get('remember') == '1' ? true : false;

		if (Auth::attempt($input, $remember))
			return Redirect::to('/admin/dogs');
		else
			return Redirect::back()->withErrors(['Invalid username or password.']);
	}

	/**
	 * Log a user out
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Flash::message('You have been logged out');

		Auth::logout();

		return Redirect::to('login');
	}

}