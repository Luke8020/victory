<?php namespace Victory\Repositories;

use Victory\Entities\BlogPost;

class BlogPostRepository {

	/**
	 * Save a newly created blog post to the database
	 * 
	 * @return Response
	 */
	public function save($input)
	{
		$blogPost = new BlogPost;
		$blogPost->title = $input['title'];
		$blogPost->body = $input['body'];

		$blogPost->save();

		return $blogPost;
	}

	/**
	 * Update the specified blog post's info in storage.
	 * 
	 * @return Response
	 */
	public function update($id, $input)
	{
		$blogPost = BlogPost::findOrFail($id);
		$blogPost->title = $input['title'];
		$blogPost->body = $input['body'];

		$blogPost->update();

		return $blogPost;
	}

	
}