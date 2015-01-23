<?php

Route::get('/image-factory', function()
{
	$counter = 1;
	$dirf    = public_path() . "/images/danes";
	$destinationPath = public_path() . '/images/dogs/';
	$dir = scandir($dirf);

	foreach($dir as $file) 
	{
	   if(($file!='..') && ($file!='.')) 
	   {
	      if($counter!=0) 
	      {
	      	echo $dirf . '/' . $file . '<br>';
	      	$image = Image::make(file_get_contents($dirf . '/' . $file));
	      	$fileName = $counter . '.jpg';
	      	$image->save($destinationPath . $fileName);
	      }
	      $counter++;
	   }
	}
});

/**
 * Show the home page with all of the dogs
 */
Route::get('/', [
	'as' => 'home_path',
	'uses' => 'DogsController@index'
]);

Route::resource('dogs', 'DogsController');


