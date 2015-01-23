<?php

class SessionsController extends \BaseController {


	public function __construct(SessionForm $sessionForm)
	{
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for logging in
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Log a user in
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'password');

		if (Auth::attempt($input, true))
			return Redirect::intended('/');
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