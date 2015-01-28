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
    			'name' => $faker->firstName,
                'birthdate' => $faker->date($format = 'Y-m-d', $min = '-3 years', $max = 'now'),
                'height' => rand(80, 200) . ' cm',
                'weight' => rand(80, 150) . ' lbs',
                'about' => $faker->paragraph($nbSentences = 3)
            ]);
        }
		
	}

}