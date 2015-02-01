<?php

use Victory\Entities\User;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::create([
			'first_name' => 'Larkin',
            'last_name' => 'Whitaker',
            'email' => 'larkin@elkdevelopment.com',
            'password' => Hash::make('test')
        ]);
		
	}

}