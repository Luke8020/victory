<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class BlogPostForm extends FormValidator {


	protected $rules = [
		'title' => 'required',
		'body' => 'required'
	];
	
}