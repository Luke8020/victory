<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class ContactForm extends FormValidator {


	protected $rules = [
		'name' => 'required',
		'email' => 'required|email',
		'subject' => 'required',
		'contactMessage' => 'required'
	];
	
}