<?php

use Victory\Entities\Puppy;

use Victory\Repositories\PictureRepository;

class PuppyPicturesController extends \BaseController {

	protected $pictureRepository;

	public function __construct(PictureRepository $pictureRepository)
	{
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /puppypictures/{id}
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

		$puppy = Puppy::findOrFail($id);
		$destinationPath = public_path() . '/images/puppies/';
		$this->pictureRepository->savePictures($otherPictures, $puppy, $destinationPath);

		Flash::success("The puppy's new pictures were added successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /puppypictures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$puppy = Puppy::findOrFail($id);

		$pictureId = Input::get('pictureId');
		$picture = $puppy->pictures()->where('id', '=', $pictureId)->first();
		$picture->delete();
		
		Flash::message('The picture was removed.');

		return Redirect::back()->withInput();
	}

}