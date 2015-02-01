<?php namespace Victory\Presenters;

use Laracasts\Presenter\Presenter;

class BlogPostPresenter extends Presenter {

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function mainPicture()
	{
		return '/images/blog/' . $this->id . '.jpg';
	}

	/**
	 * The dog's main picture image path
	 *
	 * @return Response
	 */
	public function thumbnailPath()
	{
		return '/images/blog/thumbnails/' . $this->id . '.jpg';
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
				'title' => $this->title . ' details',
				'class' => 'active'
			]);
		}
		else if ($action == 'edit')
		{
			array_push($breadcrumbs, [
				'title' => $this->title . ' details',
				'location' => '/admin/blogposts/' . $this->id,
				'class' => ''
			]);
			array_push($breadcrumbs, [
				'title' => 'Edit ' . $this->title . ' details',
				'class' => 'active'
			]);
		}

		return $breadcrumbs;
	}

}