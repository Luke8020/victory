<?php

use Victory\Entities\Dog;
use Faker\Factory as Faker;

class DogsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        foreach(range(1, 12) as $index)
        {
    		Dog::create([
    			'name' => $faker->firstName
            ]);
        }
		
	}

}