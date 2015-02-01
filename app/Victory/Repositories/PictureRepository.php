<?php namespace Victory\Repositories;

use Victory\Entities\Picture;
use Image;

class PictureRepository {

	/**
	 * Crop main picture and save to destination path with a name that
	 * corresponds to the related Model's id
	 * 
	 * @return Response
	 */
	public function saveMainPicture($mainPicture, $picturedId, $destinationPath, $dimensions)
	{
		$filename = $picturedId . '.jpg';

		$image = Image::make($mainPicture->getRealPath());

		$image->crop($dimensions['dataW'], $dimensions['dataH'], $dimensions['dataX'], $dimensions['dataY']);

		$image->save($destinationPath . $filename);

		// Resize and save thumbnail
		if ($image->width() > 200)
		{
			$image->fit(200);
		}

		$image->save($destinationPath . 'thumbnails/' . $filename);
	}

	/**
	 * Save pictures to destination path and associate to 
	 * model in the database
	 * 
	 * @return Response
	 */
	public function savePictures($pictures, $picturedModel, $destinationPath)
	{
		foreach ($pictures as $picture)
		{
			$lastPictureId = '1';
			if ( !is_null($picturedModel->lastPicture()) )
			{
				$lastPicturePath = $picturedModel->lastPicture()->path;
				$lastPicture = ltrim($lastPicturePath, '.jpg');

				$numberOfDigits = strlen($picturedModel->id) + 1;
				$lastPictureId = substr($lastPicturePath, $numberOfDigits, -4);
				$lastPictureId++;
			}

			$filename = $picturedModel->id . '-' . $lastPictureId . '.jpg';

			$image = Image::make($picture->getRealPath());

			$image->save($destinationPath . $filename);

			// Resize and save thumbnail
			if ($image->width() > 200)
			{
				$image->fit(200);
			}

			$image->save($destinationPath . 'thumbnails/' . $filename);

			$picture = new Picture;
			$picture->path = $filename;
			$picture->save();

			$picturedModel->pictures()->save($picture);
		}
	}

	
}