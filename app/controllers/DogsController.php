<?php

use Victory\Entities\Dog;

class DogsController extends \BaseController {

	/**
	 * Display a listing of all the dogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$dogs = Dog::all();

		return View::make('victory.index')
			->with('dogs', $dogs);
	}

	/**
	 * Display the user profile with
	 * a form to accept their application
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function show($id)
	{
		$dog = Dog::findOrFail($id);

		return View::make('victory.show')
			->with('dog', $dog);
	}

}