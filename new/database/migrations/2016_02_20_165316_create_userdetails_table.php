<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('userdetails', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('adrsl1');
			$table->string('adrsl2');
			$table->integer('pin');
			$table->integer('phone');
			/* foriegn key on users with userid*/
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
	}

}
