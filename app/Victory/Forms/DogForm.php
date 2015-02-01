<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class DogForm extends FormValidator {


	protected $rules = [
		'name' => 'required',
		'is_male' => 'required',
		'breed' => 'required'
	];
	
}