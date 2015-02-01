<?php

use Victory\Entities\Puppy;
use Victory\Entities\Picture;

class PuppiesTableSeeder extends Seeder {

	public function run()
	{
		foreach (range(1,2) as $index)
		{
			$puppy = new Puppy;
			$puppy->save();

			foreach (range(1,2) as $index)
			{
				$picture = new Picture;
				$picture->path = $puppy->id . '-' . $index . '.jpg';
				$picture->save();

				$puppy->pictures()->save($picture);
			}
		}
	}

}