<?php

use Victory\Entities\Puppy;

use Victory\Repositories\PictureRepository;

class PuppiesController extends \BaseController {

	protected $pictureRepository;

	public function __construct(PictureRepository $pictureRepository)
	{
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);

		$section = [
			'title' => 'All Puppies',
			'location' => '/admin/puppies'
		];

		View::share('section', $section);
	}

	/**
	 * Display a listing of all the puppies.
	 * GET /admin/puppies
	 *
	 * @return Response
	 */
	public function index()
	{
		$puppies = Puppy::all();

		$pageDescription = 'Click on a puppy\'s picture to view/edit their details or add a new puppy to the litter.';

		$createButton = [
			'title' => 'Add New Puppy',
			'location' => '/admin/puppies/create'
		];

		$breadcrumbs = [];

		return View::make('admin.puppies.index')
			->with('pageName', 'All the Puppies')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('createButton', $createButton)
			->with('puppies', $puppies);
	}

	/**
	 * Show the form for creating a new puppy.
	 * GET /admin/puppies/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageDescription = 'Fill out the form and press submit to add a new puppy to the litter.';

		$breadcrumbs = [
			[
				'title' => 'Add a Puppy',
				'location' => '/admin/puppies/create',
				'class' => 'active'
			]
		];

		return View::make('admin.puppies.create')
			->with('pageName', 'Add a New Puppy')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Store a newly created puppy in storage.
	 * POST /admin/puppies/create
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

		// Create new Puppy and save in storage
		$puppy = new Puppy;
		$puppy->save();

		$destinationPath = public_path() . '/images/puppies/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $puppy->id, $destinationPath, $dimensions);

		// Save Other Pictures
		$otherPictures = Input::file('pictures');

		if (count($otherPictures))
		{
			$this->pictureRepository->savePictures($otherPictures, $puppy, $destinationPath);
		}

		Flash::success('The puppy was added successfully.');

		return Redirect::to('/admin/puppies');
	}

	/**
	 * Display the details for a specified puppy.
	 * GET /admin/puppies/{id}
	 *
	 * @param  int Puppy Id
	 * @return Response
	 */
	public function show($id)
	{
		$puppy = Puppy::with('pictures')->findOrFail($id);

		$breadcrumbs = $puppy->present()->breadcrumbs('show');

		$pageDescription = 'Click edit to update the puppy\'s info or click remove if they are ready to leave.';

		return View::make('admin.puppies.show')
			->with('puppy', $puppy)
			->with('pageName', 'Puppy\'s info')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Show the form for editing the specified puppy.
	 * GET /admin/puppies/{id}/edit
	 *
	 * @param  int Puppy Id
	 * @return Response
	 */
	public function edit($id)
	{
		$puppy = Puppy::with('pictures')->findOrFail($id);

		$breadcrumbs = $puppy->present()->breadcrumbs('edit');

		$pageDescription = 'Here you can change the puppy\'s main picture or add and remove other pictures to the puppy\'s profile.';

		return View::make('admin.puppies.edit')
			->with('pageName', 'Edit Puppy\'s profile')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('puppy', $puppy);
	}

	/**
	 * Update the specified puppy in storage.
	 * PUT /admin/puppies/{id}/edit
	 *
	 * @param  int Puppy Id
	 * @return Response
	 */
	public function update($id)
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

		$puppy = Puppy::findOrFail($id);

		$destinationPath = public_path() . '/images/puppies/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $puppy->id, $destinationPath, $dimensions);

		Flash::success("The puppy's main picture was updated successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified puppy from storage.
	 * DELETE /admin/puppies/{id}
	 *
	 * @param  int Puppy Id
	 * @return Response
	 */
	public function destroy($id)
	{
		$puppy = Puppy::findOrFail($id);
		$puppy->delete();
		
		Flash::message('The puppy was removed.');

		return Redirect::to('/admin/puppies');
	}

}