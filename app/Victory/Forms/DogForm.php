<?php namespace Victory\Forms;

use Laracasts\Validation\FormValidator;

class DogForm extends FormValidator {


	protected $rules = [
		'name' => 'required',
		'weight' => 'required',
		'height' => 'required',
		'about' => 'required',
    	'birthdate' => 'required'
	];
	
}