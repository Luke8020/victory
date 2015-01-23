<?php

use Victory\Entities\User;
use Victory\Entities\Dog;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::truncate();
		Dog::truncate();

		Eloquent::unguard();

		$this->call('UsersTableSeeder');

		$this->call('DogsTableSeeder');

	}
}

