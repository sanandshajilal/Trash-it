<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model {

	//
	public $timestamps = false;
	protected $fillable = ['item_name','weight','vendor_name','amount'];


}
