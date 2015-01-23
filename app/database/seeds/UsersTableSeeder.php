<?php

use Victory\Entities\User;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([
			'first_name' => 'Luke',
            'last_name' => 'Markey',
            'email' => 'luke@elkdevelopment.com',
            'password' => Hash::make('test')
        ]);

        User::create([
			'first_name' => 'Larkin',
            'last_name' => 'Whitaker',
            'email' => 'larkin@elkdevelopment.com',
            'password' => Hash::make('test')
        ]);
		
	}

}