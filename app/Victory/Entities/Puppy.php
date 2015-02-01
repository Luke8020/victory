<?php namespace Victory\Entities;

use Laracasts\Presenter\PresentableTrait;

class Puppy extends \Eloquent {

	use PresentableTrait;
	
	/**
	 * Path to the presenter for the puppy
	 *
	 * @var string
	 */
	protected $presenter = 'Victory\Presenters\PuppyPresenter';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'puppies';

	/**
	 * Creates a global model for pictures
	 *
	 * @return Response
	 */
	public function pictures()
	{
		return $this->morphMany('Victory\Entities\Picture', 'pictured');
	}

	/**
	 * 
	 *
	 * @return Response
	 */
	public function lastPicture()
	{
		return $this->pictures()->orderBy('id', 'DESC')->first();
	}

}
