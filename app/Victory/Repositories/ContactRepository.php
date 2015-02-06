<?php namespace Victory\Repositories;

use Auth;
use Mail;

class ContactRepository {

	/**
	 * Send an email with feedback from the input form
	 *
	 * @param Form Input
	 * @return Response
	 */
	public function submit($input)
	{
	    return Mail::send('emails.contact', $input, function($message) use ($input)
		{
			$message->to('victrydane@aol.com')
				->subject('Post From Victory Great Danes\' Website Contact Form')
				->from($input['email']);
		});
	}

	
}