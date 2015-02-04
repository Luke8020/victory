<?php

use Victory\Entities\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
			'first_name' 		=> 'Larkin',
            'last_name' 		=> 'Whitaker',
            'email' 			=> 'larkin@keystrokecreative.com',
            'password' 			=> Hash::make('jawsleft$8020')
        ]);
        User::create([
        	'first_name'		=> 'Luke',
        	'last_name'			=> 'Markey',
        	'email'				=> 'luke@keystrokecreative.com',
        	'password'			=> Hash::make('lukehm8020')
        ]);
        User::create([
        	'first_name'		=> 'Kris',
        	'last_name'			=> 'Lawson',
        	'email'				=> 'kris@keystrokecreative.com',
        	'password'			=> Hash::make('kobe1215')
        ]);
        User:: create([
        	'first_name'		=> 'Victoria',
        	'last_name'			=> 'Pearson',
        	'email'				=> 'Victrydane@aol.com',
        	'password'			=> Hash::make('vgd2015$admin')
        ]);
	}
}