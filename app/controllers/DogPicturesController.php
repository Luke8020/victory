<?php

use Victory\Entities\Dog;

use Victory\Repositories\PictureRepository;

class DogPicturesController extends \BaseController {

	protected $pictureRepository;

	public function __construct(PictureRepository $pictureRepository)
	{
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dogpictures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$otherPictures = Input::file('pictures');

		if (! Input::hasFile('pictures'))
		{
			return Redirect::back()->withErrors('No file has been selected');
		}

		$dog = Dog::findOrFail($id);
		$destinationPath = public_path() . '/images/dogs/';
		$this->pictureRepository->savePictures($otherPictures, $dog, $destinationPath);

		Flash::success($dog->name . "'s new pictures were added successfully.");

		return Redirect::back();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /dogpictures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function updateMain($id)
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

		$dog = Dog::findOrFail($id);

		$destinationPath = public_path() . '/images/dogs/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $dog->id, $destinationPath, $dimensions);

		Flash::success($dog->name . "'s main picture was updated successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /dogpictures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$dog = Dog::findOrFail($id);

		$pictureId = Input::get('pictureId');
		$picture = $dog->pictures()->where('id', '=', $pictureId)->first();
		$picture->delete();
		
		Flash::message('The picture was removed.');

		return Redirect::back()->withInput();
	}

}