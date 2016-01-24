<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('adrsl1');
            $table->string('adrsl2');
            $table->string('place');
            $table->string('pin');
            $table->string('email');
            $table->string('phone');
            $table->string('pickdate');
            $table->string('remarks');
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
        Schema::drop('bookings');
    }
}
