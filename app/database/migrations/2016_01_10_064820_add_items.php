<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('items')->insert(array(
          'itemname'=>'Newspaper'
        ));
        DB::table('items')->insert(array(
          'itemname'=>'Plastic'
        ));
        DB::table('items')->insert(array(
          'itemname'=>'Iron'
        ));
        DB::table('items')->insert(array(
          'itemname'=>'Beer Bottles'
        ));
        DB::table('items')->insert(array(
          'itemname'=>'Books'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('items')->where('itemname', '=', 'Newspaper')->delete();
        DB::table('items')->where('itemname', '=', 'Plastic')->delete();
        DB::table('items')->where('itemname', '=', 'Iron')->delete();
        DB::table('items')->where('itemname', '=', 'Beer Bottles')->delete();
        DB::table('items')->where('itemname', '=', 'Books')->delete();
    }
}
