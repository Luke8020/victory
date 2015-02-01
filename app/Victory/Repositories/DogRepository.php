<?php namespace Victory\Repositories;

use Victory\Entities\Dog;

class DogRepository {

	/**
	 * Get a list of all pedigree fields
	 *
	 * @var Array
	 */
	protected $pedigree = [
        ['m', 'd'],
        ['mm', 'md', 'dm', 'dd'],
        ['mmm', 'mmd', 'mdm', 'mdd', 'dmm', 'dmd', 'ddm', 'ddd'],
        ['mmmm', 'mmmd', 'mmdm', 'mmdd', 'mdmm', 'mdmd', 'mddm', 'mddd', 'dmmm', 'dmmd', 'dmdm', 'dmdd', 'ddmm', 'ddmd', 'dddm', 'dddd']
	];

	/**
	 * Save a newly created dog to the database
	 * 
	 * @return Response
	 */
	public function save($input)
	{
		$dog = new Dog;
		$dog->name = $input['name'];
		$dog->breed = $input['breed'];
		$dog->about = $input['about'];

		// Save Pedigree Info
		$pedigree = $this->pedigree;

		foreach ($pedigree as $generation)
		{
			foreach ($generation as $individual)
			{
				$dog[$individual] = $input[$individual] == '' ? null : $input[$individual];
			}
		}

		$dog->save();

		return $dog;
	}

	/**
	 * Update the specified dog's info in storage.
	 * 
	 * @return Response
	 */
	public function update($id, $input)
	{
		$dog = Dog::findOrFail($id);

		$dog->name = $input['name'];
		$dog->breed = $input['breed'];
		$dog->about = $input['about'];

		$dog->update();

		return $dog;
	}

	/**
	 * Update the specified dog's pedigree in storage.
	 * 
	 * @return Response
	 */
	public function updatePedigree($id, $input)
	{
		$dog = Dog::findOrFail($id);

		// Save Pedigree Info
		$pedigree = $this->pedigree;

		foreach ($pedigree as $generation)
		{
			foreach ($generation as $individual)
			{
				$dog[$individual] = $input[$individual] == '' ? null : $input[$individual];
			}
		}

		$dog->update();

		return $dog;
	}

	
}