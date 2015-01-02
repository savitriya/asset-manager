<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// asset table to store the asset information
		Schema::create('asset',function($table)
		{
			$table->increments('id');
			$table->string('a_name');
			$table->string('a_type');
			$table->text('a_info');
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
		//to drop asset table
		Schema::drop('asset');
	}

}
