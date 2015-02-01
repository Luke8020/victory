<?php namespace Victory\Presenters;

use Laracasts\Presenter\Presenter;

class PuppyPresenter extends Presenter {

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function mainPicture()
	{
		return '/images/puppies/' . $this->id . '.jpg';
	}

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function thumbnailPath()
	{
		return '/images/puppies/thumbnails/' . $this->id . '.jpg';
	}

	/**
	 * Creates breadcrumbs for admin view
	 *
	 * @return Response
	 */
	public function breadcrumbs($action)
	{
		$breadcrumbs = [];

		if ($action == 'show')
		{
			array_push($breadcrumbs, [
				'title' => 'Puppy\'s profile',
				'class' => 'active'
			]);
		}
		else if ($action == 'edit')
		{
			array_push($breadcrumbs, [
				'title' => 'Puppy\'s profile',
				'location' => '/admin/puppies/' . $this->id,
				'class' => ''
			]);
			array_push($breadcrumbs, [
				'title' => 'Edit Puppy\'s profile',
				'class' => 'active'
			]);
		}

		return $breadcrumbs;
	}

}