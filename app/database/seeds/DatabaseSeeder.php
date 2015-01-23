<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('DogsSeeder');
		$this->command->info('Dogs have finished seeding');

	}
}

		class DogSeeder extends Seeder {

			public function run() {

			$ashur = Dog::create(array(
				'name'			=>	'Ashur',
				'img'			=>	'{{ asset('images/danes/ashur-1.jpg') }}'
			));

			$breeze = Dog::create(array(
				'name'			=>	'Breeze',
				'img'			=>	'{{ asset('images/danes/breeze-1.jpg') }}'
			));

			$caruso = Dog::create(array(
				'name'			=>	'Caruso',
				'img'			=>	'{{ asset('images/danes/caruso-1.jpg') }}'
			));

		}
	}
