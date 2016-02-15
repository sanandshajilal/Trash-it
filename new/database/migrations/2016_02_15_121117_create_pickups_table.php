<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePickupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pickups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('booking_id')->unsigned();
			$table->integer('amount');
			$table->text('items');
			$table->foreign('booking_id')->references('id')->on('bookings');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pickups');
	}

}
