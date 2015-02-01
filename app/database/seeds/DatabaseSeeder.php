<?php

use Victory\Entities\User;
use Victory\Entities\Dog;
use Victory\Entities\Puppy;
use Victory\Entities\BlogPost;
use Victory\Entities\Picture;

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
		Puppy::truncate();
		BlogPost::truncate();
		Picture::truncate();

		Eloquent::unguard();

		$this->call('UsersTableSeeder');

		$this->call('FemaleDogsTableSeeder');
		$this->call('MaleDogsTableSeeder');

		$this->call('PuppiesTableSeeder');

		$this->call('BlogPostsTableSeeder');

		$this->call('PicturesTableSeeder');

	}
}

