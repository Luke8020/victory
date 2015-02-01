<?php namespace Victory\Entities;

use Laracasts\Presenter\PresentableTrait;

class Dog extends \Eloquent {

	use PresentableTrait;
	
	/**
	 * Path to the presenter for the dog
	 *
	 * @var string
	 */
	protected $presenter = 'Victory\Presenters\DogPresenter';

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'dogs';

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
