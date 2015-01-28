<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class SessionForm extends FormValidator {


	protected $rules = [
		'email' => 'required|email',
    	'password' => 'required'
	];
	
}