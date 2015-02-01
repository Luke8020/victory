<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('breed');
			$table->boolean('is_male');
			$table->text('about')->nullable();

			/**
			 * Pedigree Info
			 */
			// First Generation
			$table->string('m')->nullable();
			$table->string('d')->nullable();

			// Second Generation
			$table->string('mm')->nullable();
			$table->string('md')->nullable();
			$table->string('dm')->nullable();
			$table->string('dd')->nullable();

			// Third Generation
			$table->string('mmm')->nullable();
			$table->string('mmd')->nullable();
			$table->string('mdm')->nullable();
			$table->string('mdd')->nullable();

			$table->string('dmm')->nullable();
			$table->string('dmd')->nullable();
			$table->string('ddm')->nullable();
			$table->string('ddd')->nullable();

			// Fourth Generation
			$table->string('mmmm')->nullable();
			$table->string('mmmd')->nullable();
			$table->string('mmdm')->nullable();
			$table->string('mmdd')->nullable();

			$table->string('mdmm')->nullable();
			$table->string('mdmd')->nullable();
			$table->string('mddm')->nullable();
			$table->string('mddd')->nullable();

			$table->string('dmmm')->nullable();
			$table->string('dmmd')->nullable();
			$table->string('dmdm')->nullable();
			$table->string('dmdd')->nullable();

			$table->string('ddmm')->nullable();
			$table->string('ddmd')->nullable();
			$table->string('dddm')->nullable();
			$table->string('dddd')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dogs');
	}

}
