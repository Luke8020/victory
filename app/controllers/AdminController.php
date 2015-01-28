<?php

use Victory\Entities\Dog;
use Victory\Forms\DogForm;

class AdminController extends \BaseController {


	public function __construct(DogForm $dogForm)
	{
		$this->dogForm = $dogForm;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
	}

	/**
	 * Display a listing of the resource.
	 * GET /applicants
	 *
	 * @return Response
	 */
	public function index()
	{
		$dogs = Dog::all();

		$pageDescription = 'Click on a dane\'s picture to view/edit their details or add a new dane to the litter.';

		$breadcrumbs = [];

		return View::make('admin.dogs.index')
			->with('pageName', 'All the Danes')
			->with('pageDescription', $pageDescription)
			->with('dogs', $dogs)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /applicants/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageDescription = 'Fill out the form and press submit to add a new dane to the litter.';

		$breadcrumbs = [
			[
				'title' => 'Add a Dane',
				'location' => '/admin/create',
				'class' => 'active'
			]
		];

		return View::make('admin.dogs.create')
			->with('pageName', 'Add a New Dane')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /applicants
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();

		$this->dogForm->validate($input);

		$dog = new Dog;
		$dog->name = $input['name'];
		$dog->weight = $input['weight'];
		$dog->height = $input['height'];
		$dog->birthdate = $input['birthdate'];
		$dog->about = $input['about'];

		$dog->save();

		Flash::message($dog->name . " was added successfully.");

		return Redirect::to('/admin');
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

		$breadcrumbs = [
			[
				'title' => $dog->name . '\'s info',
				'class' => 'active'
			]
		];

		$pageDescription = 'Click edit to update ' . $dog->name . '\'s info or click remove if they are ready to leave.';

		return View::make('admin.dogs.show')
			->with('dog', $dog)
			->with('pageName', $dog->name . '\'s info')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /applicants/{id}/edit
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function edit($id)
	{
		$dog = Dog::findOrFail($id);

		$breadcrumbs = [
			[
				'title' => $dog->name . '\'s info',
				'location' => '/admin/dogs/' . $dog->id,
				'class' => ''
			],
			[
				'title' => 'Edit ' . $dog->name . '\'s info',
				'class' => 'active'
			]
		];

		$pageDescription = 'Fill out the form and click update to save your changes or you can edit ' . $dog->name . '\'s picture.';

		return View::make('admin.dogs.edit')
			->with('dog', $dog)
			->with('pageName', 'Edit ' . $dog->name . '\'s info')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Accept the applicant for the job
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$this->dogForm->validate($input);

		$dog = Dog::findOrFail($id);
		$dog->name = $input['name'];
		$dog->weight = $input['weight'];
		$dog->height = $input['height'];
		$dog->birthdate = $input['birthdate'];
		$dog->about = $input['about'];

		$dog->update();

		Flash::message($dog->name . "'s info was updated successfully.");

		return Redirect::to('/admin');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /applicants/{id}
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dog = Dog::findOrFail($id);
		$dog_name = $dog->name;
		$dog->delete();
		
		Flash::message($dog_name.' was removed.');

		return Redirect::to('/admin');
	}

}