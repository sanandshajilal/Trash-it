<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//

		Schema::create('feedbacks', function (Blueprint $table) {
				$table->increments('id');
				$table->string('name');
				$table->string('email')->unique();
				$table->string('phone',12);
				$table->text('message');
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
		Schema::drop('feedbacks');
	}

}
