<?php namespace Victory\Presenters;

use Laracasts\Presenter\Presenter;

class DogPresenter extends Presenter {

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function mainPicture()
	{
		return '/images/dogs/' . $this->id . '.jpg';
	}

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function thumbnailPath()
	{
		return '/images/dogs/thumbnails/' . $this->id . '.jpg';
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
				'title' => $this->name . '\'s profile',
				'class' => 'active'
			]);
		}
		else if ($action == 'edit')
		{
			array_push($breadcrumbs, [
				'title' => $this->name . '\'s profile',
				'location' => '/admin/dogs/' . $this->id,
				'class' => ''
			]);
			array_push($breadcrumbs, [
				'title' => 'Edit ' . $this->name . '\'s profile',
				'class' => 'active'
			]);
		}

		return $breadcrumbs;
	}

	/**
	 * Returns the dog's gender
	 *
	 * @return Response
	 */
	public function gender()
	{
		return $this->is_male ? 'Male' : 'Female';
	}

	/**
	 * Returns the dog's gender class for sortable grid
	 *
	 * @return Response
	 */
	public function genderClass()
	{
		return $this->is_male ? 'man' : 'woman';
	}

	/**
	 * Checks for empty data set and returns warning string
	 *
	 * @return Response
	 */
	public function presentable($presentable)
	{
		$warningText = '<span class="text-danger"> Not Set</span>';
		return is_null($presentable) ? $warningText : $presentable;
	}


}