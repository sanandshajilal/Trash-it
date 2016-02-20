<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model {

	//
	public $timestamps = false;
	protected $fillable = ['adrsl1','adrsl2','pin','phone','user_id'];

}
