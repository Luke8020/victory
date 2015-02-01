<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class PasswordForm extends FormValidator {

	
	protected $rules = [
		'password' => 'required|confirmed'
	];
}