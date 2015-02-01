<?php namespace Victory\Entities;

use Laracasts\Presenter\PresentableTrait;

class Picture extends \Eloquent {

	use PresentableTrait;
	
	/**
	 * Path to the presenter for the picture
	 *
	 * @var string
	 */
	protected $presenter = 'Victory\Presenters\PicturePresenter';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pictures';

	/**
	 * Creates a global model for pictures
	 *
	 * @return Response
	 */
	public function pictured()
	{
		return $this->morphTo();
	}

}
