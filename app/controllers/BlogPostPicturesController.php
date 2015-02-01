<?php

use Victory\Entities\BlogPost;

use Victory\Repositories\PictureRepository;

class BlogPostPicturesController extends \BaseController {

	protected $pictureRepository;

	public function __construct(PictureRepository $pictureRepository)
	{
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /blogpostpictures/{id}
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

		$blogPost = BlogPost::findOrFail($id);
		$destinationPath = public_path() . '/images/blog/';
		$this->pictureRepository->savePictures($otherPictures, $blogPost, $destinationPath);

		Flash::success($blogPost->title . "'s new pictures were added successfully.");

		return Redirect::back();
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /blogpostpictures/{id}
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

		$blogPost = BlogPost::findOrFail($id);

		$destinationPath = public_path() . '/images/blog/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $blogPost->id, $destinationPath, $dimensions);

		Flash::success($blogPost->title . "'s main picture was updated successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /blogpostpictures/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blogPost = BlogPost::findOrFail($id);

		$pictureId = Input::get('pictureId');
		$picture = $blogPost->pictures()->where('id', '=', $pictureId)->first();
		$picture->delete();
		
		Flash::message('The picture was removed.');

		return Redirect::back()->withInput();
	}

}