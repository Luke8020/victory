<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

		$currentRoute = Route::getCurrentRoute()->getPath();

		View::share('currentRoute', $currentRoute);

		$pedigree = [
            ['m', 'd'],
            ['mm', 'md', 'dm', 'dd'],
            ['mmm', 'mmd', 'mdm', 'mdd', 'dmm', 'dmd', 'ddm', 'ddd'],
            ['mmmm', 'mmmd', 'mmdm', 'mmdd', 'mdmm', 'mdmd', 'mddm', 'mddd', 'dmmm', 'dmmd', 'dmdm', 'dmdd', 'ddmm', 'ddmd', 'dddm', 'dddd']
		];

		View::share('pedigree', $pedigree);
	}

}
