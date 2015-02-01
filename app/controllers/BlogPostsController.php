<?php

use Victory\Entities\BlogPost;
use Victory\Forms\BlogPostForm;

use Victory\Repositories\BlogPostRepository;
use Victory\Repositories\PictureRepository;

class BlogPostsController extends \BaseController {

	protected $blogPostRepository;
	protected $pictureRepository;

	public function __construct(BlogPostForm $blogPostForm, BlogPostRepository $blogPostRepository, PictureRepository $pictureRepository)
	{
		$this->blogPostForm = $blogPostForm;
		$this->blogPostRepository = $blogPostRepository;
		$this->pictureRepository = $pictureRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);

		$section = [
			'title' => 'All Blog Posts',
			'location' => '/admin/blogposts'
		];

		View::share('section', $section);
	}

	/**
	 * Display a listing of all the blogposts.
	 * GET /admin/blogposts
	 *
	 * @return Response
	 */
	public function index()
	{
		$blogPosts = BlogPost::all();

		$pageDescription = 'Click on a blog post to view/edit its details or create a new one.';

		$createButton = [
			'title' => 'Add New Post',
			'location' => '/admin/blogposts/create'
		];

		$breadcrumbs = [];

		return View::make('admin.blogposts.index')
			->with('pageName', 'All the Posts')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('createButton', $createButton)
			->with('blogPosts', $blogPosts);
	}

	/**
	 * Show the form for creating a new blogpost.
	 * GET /admin/blogposts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$pageDescription = 'Fill out the form and press submit to add a new post to the blog.';

		$breadcrumbs = [
			[
				'title' => 'Add a Post',
				'location' => '/admin/blogposts/create',
				'class' => 'active'
			]
		];

		return View::make('admin.blogposts.create')
			->with('pageName', 'Add a New Post')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs);
	}

	/**
	 * Store a newly created blogpost in storage.
	 * POST /admin/blogposts/create
	 *
	 * @return Response
	 */
	public function store()
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

		// Create new Blog Post and save in storage
		$this->blogPostForm->validate($input);

		$blogPost = $this->blogPostRepository->save($input);

		$destinationPath = public_path() . '/images/blog/';

		// Save Main Picture
		$dimensions = Input::only('dataX', 'dataY', 'dataW', 'dataH');
		$this->pictureRepository->saveMainPicture($mainPicture, $blogPost->id, $destinationPath, $dimensions);

		// Save Other Pictures
		$otherPictures = Input::file('pictures');

		if (Input::hasFile('pictures'))
		{
			$this->pictureRepository->savePictures($otherPictures, $blogPost, $destinationPath);
		}

		Flash::success($blogPost->title . " was added successfully.");

		return Redirect::to('/admin/blogposts');
	}

	/**
	 * Display the details for a specified blogpost.
	 * GET /admin/blogposts/{id}
	 *
	 * @param  int BlogPost Id
	 * @return Response
	 */
	public function show($id)
	{
		$blogPost = BlogPost::with('pictures')->findOrFail($id);

		$breadcrumbs = $blogPost->present()->breadcrumbs('show');

		$pageDescription = 'Click edit to update ' . $blogPost->title . '\'s details or click remove if you wish to delete it.';

		return View::make('admin.blogposts.show')
			->with('pageName', $blogPost->title . '\'s details')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('blogPost', $blogPost);
	}

	/**
	 * Show the form for editing the specified blogpost.
	 * GET /admin/blogposts/{id}/edit
	 *
	 * @param  int BlogPost Id
	 * @return Response
	 */
	public function edit($id)
	{
		$blogPost = BlogPost::with('pictures')->findOrFail($id);

		$breadcrumbs = $blogPost->present()->breadcrumbs('edit');

		$pageDescription = 'Click the tab you want to edit, fill out the form and click update to save your changes.';

		return View::make('admin.blogposts.edit')
			->with('pageName', 'Edit ' . $blogPost->title . '\'s details')
			->with('pageDescription', $pageDescription)
			->with('breadcrumbs', $breadcrumbs)
			->with('blogPost', $blogPost);
	}

	/**
	 * Update the specified blogpost in storage.
	 * PUT /admin/blogposts/{id}/edit
	 *
	 * @param  int BlogPost Id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$this->blogPostForm->validate($input);

		$blogPost = $this->blogPostRepository->update($id, $input);

		Flash::message($blogPost->title . "'s details were updated successfully.");

		return Redirect::back();
	}

	/**
	 * Remove the specified blogpost from storage.
	 * DELETE /admin/blogposts/{id}
	 *
	 * @param  int BlogPost Id
	 * @return Response
	 */
	public function destroy($id)
	{
		$blogPost = BlogPost::findOrFail($id);
		$postTitle = $blogPost->title;
		$blogPost->delete();
		
		Flash::message($postTitle.' was removed.');

		return Redirect::to('/admin/blogposts');
	}

}