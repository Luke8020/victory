<?php namespace Victory\Presenters;

use Laracasts\Presenter\Presenter;

class PicturePresenter extends Presenter {

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function picturePath($modelName)
	{
		return '/images/' . $modelName . '/' . $this->path;
	}

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function thumbnailPath($modelName)
	{
		return '/images/' . $modelName . '/thumbnails/' . $this->path;
	}


}