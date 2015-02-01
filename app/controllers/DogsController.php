<?php

use Victory\Entities\Dog;
use Victory\Forms\DogForm;

use Victory\Repositories\DogRepository;
use Victory\Repositories\PictureRepository;

class DogsController extends \BaseController {

	protected $pictureRepository;
	protected $dogRepository;

	public function __construct(DogForm $dogForm, DogRepository $dogRepository, PictureRepository $pictureRepository)
	{
		$this->dogForm = $dogForm;
		$this->dogRepository = $dogRepository;
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);

		$section = [
			'title' => 'All Dogs',
			'location' => '/admin/dogs'
		];

		View::share('section', $section);
	}

	/**
	 * Display a listing of all the dogs.
	 * GET /admin/dogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$dogs = Dog::all();

		$pageDescription = 'Click on a dane\'s picture to view/edit their details or add a new dane to the litter.';

		$createButton = [
			'title' => 'Add New Dog',
			'location' => '/admin/dogs/create'
		];

		$breadcrumbs = [];

		return View::make('admin.dogs.index')
			->with('pageName', 'All the Danes')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('createButton', $createButton)
			->with('dogs', $dogs);
	}

	/**
	 * Show the form for creating a new dog.
	 * GET /admin/dogs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageDescription = 'Fill out the form and press submit to add a new dane to the litter.';

		$breadcrumbs = [
			['title' => 'Add a Dane',
			'class' => 'active']
		];

		return View::make('admin.dogs.create')
			->with('pageName', 'Add a New Dane')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Store a newly created dog in storage.
	 * POST /admin/dogs/create
	 *
	 * @return Response
	 */
	public function store()
	{
		$mainPicture = Input::file('main_picture');

		// Validate main picture
		if (! Input::hasFile('main_picture'))
		{
			return Redirect::back()->withErrors('No file has been selected');
		}
		elseif (! $mainPicture->isValid())
		{
			return Redirect::back()->withErrors('Invalid file');
		}

		$input = Input::all();

		// Create new Dog and save in storage
		$this->dogForm->validate($input);

		$dog = $this->dogRepository->save($input);

		$destinationPath = public_path() . '/images/dogs/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $dog->id, $destinationPath, $dimensions);

		// Save Other Pictures
		$otherPictures = Input::file('pictures');

		if (Input::hasFile('pictures'))
		{
			$this->pictureRepository->savePictures($otherPictures, $dog, $destinationPath);
		}

		Flash::success($dog->name . " was added successfully.");

		return Redirect::to('/admin/dogs');
	}

	/**
	 * Display the details for a specified dog
	 * GET /admin/dogs/{id}
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function show($id)
	{
		$dog = Dog::with('pictures')->findOrFail($id);

		$breadcrumbs = $dog->present()->breadcrumbs('show');

		$pageDescription = 'Click edit to update ' . $dog->name . '\'s info or click remove if they are ready to leave.';

		return View::make('admin.dogs.show')
			->with('pageName', $dog->name . '\'s profile')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('dog', $dog);
	}

	/**
	 * Show the form for editing the specified dog.
	 * GET /admin/dogs/{id}/edit
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function edit($id)
	{
		$dog = Dog::with('pictures')->findOrFail($id);

		$breadcrumbs = $dog->present()->breadcrumbs('edit');

		$pageDescription = 'Click the tab you want to edit, fill out the form and click update to save your changes.';

		return View::make('admin.dogs.edit')
			->with('pageName', 'Edit ' . $dog->name . '\'s profile')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('dog', $dog);
	}

	/**
	 * Update the specified dog in storage.
	 * POST /admin/dogs/{id}/edit
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$this->dogForm->validate($input);

		$dog = $this->dogRepository->update($id, $input);

		Flash::message($dog->name . "'s info was updated successfully.");

		return Redirect::back();
	}

	/**
	 * Update the specified dog in storage.
	 * POST /admin/dogs/{id}/edit
	 *
	 * @param  Dog Id
	 * @return Response
	 */
	public function updatePedigree($id)
	{
		$input = Input::all();

		$dog = $this->dogRepository->updatePedigree($id, $input);

		Flash::message($dog->name . "'s pedigree was updated successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified dog from storage.
	 * DELETE /admin/dogs/{id}
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

		return Redirect::to('/admin/dogs');
	}

}