<?php

use Victory\Entities\Dog;
use Victory\Entities\Puppy;
use Victory\Entities\BlogPost;

use Victory\Forms\ContactForm;
use Victory\Repositories\ContactRepository;

class MainController extends \BaseController {

	protected $contactRepository;

	public function __construct(ContactForm $contactForm, ContactRepository $contactRepository)
	{
		$this->contactForm = $contactForm;
		$this->contactRepository = $contactRepository;

		$this->beforeFilter('csrf', ['on' => ['post', 'put']]);
	}

	/**
	 * Display the home page
	 * GET /
	 *
	 * @return Response
	 */
	public function index()
	{
		$dogs = Dog::all();
		$puppies = Puppy::all();
		$blogPosts = BlogPost::all();

		return View::make('victory.index')
			->with('dogs', $dogs)
			->with('puppies', $puppies)
			->with('blogPosts', $blogPosts);
	}

	/**
	 * Submit an email with user input from the contact form
	 * POST /
	 *
	 * @return Response
	 */
	public function contact()
	{
		$input = Input::all();

		$this->contactForm->validate($input);

		$this->contactRepository->submit($input);

		return Redirect::back()->withMessage('Your message was sent! Thank you for contacting us - we will reach out to you shortly.');
	}

	/**
	 * Display information for the specified dog.
	 * GET /dogs/{id}
	 *
	 * @param  int  Dog Id
	 * @return Response
	 */
	public function showDog($id)
	{
		$dog = Dog::findOrFail($id);
		$pictures = $dog->pictures()->get();

		return View::make('victory.dogs.show')
			->with('pageName', $dog->name)
			->with('pageDescription', 'DOG PROFILE')
			->with('picturePath', 'dogs')
			->with('dog', $dog)
			->with('pictures', $pictures);
	}

	/**
	 * Display information for the specified puppy.
	 * GET /puppies/{id}
	 *
	 * @param  int  Puppy Id
	 * @return Response
	 */
	public function showPuppy($id)
	{
		$puppy = Puppy::findOrFail($id);
		$pictures = $puppy->pictures()->get();

		return View::make('victory.puppies.show')
			->with('pageName', 'AVAILABLE PUPPY')
			->with('picturePath', 'puppies')
			->with('puppy', $puppy)
			->with('pictures', $pictures);
	}

	/**
	 * Display information for the specified blog post.
	 * GET /blogposts/{id}
	 *
	 * @param  int  Blog Post Id
	 * @return Response
	 */
	public function showBlogPost($id)
	{
		$blogPost = BlogPost::with('pictures')->findOrFail($id);
		$pictures = $blogPost->pictures()->get();

		return View::make('victory.blogposts.show')
			->with('pageName', $blogPost->title)
			->with('pageDescription', 'News, Updates, and Holiday Fun!')
			->with('picturePath', 'blog')
			->with('blogPost', $blogPost)
			->with('pictures', $pictures);
	}

}