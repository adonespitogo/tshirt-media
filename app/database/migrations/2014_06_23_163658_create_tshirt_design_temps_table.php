<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTshirtDesignTempsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tshirt_design_temps', function ($table) {
			$table->increments('id');
			$table->integer('tshirt_id');
			$table->integer('design_id');
			$table->string('session_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('tshirt_design_temps');
	}

}
