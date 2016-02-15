<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Pickup extends Model {


	protected $table = 'pickups';
	public $timestamps = false;
	protected $fillable = ['booking_id','amount','items'];


}
