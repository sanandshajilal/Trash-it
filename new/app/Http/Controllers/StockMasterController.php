<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Item;
use App\Booking;
use App\Pickup;
use App\Sale;
use Auth;

class StockMasterController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 public function index(){
 		$items = Item::all();
 		$bookings = Booking::all();
		$pickups = Pickup::all();
		$date=date('Y-m-d');
 		return view('stockmaster.index',['user'=>Auth::user(),'items'=>$items,'bookings'=>$bookings,'pickups'=>$pickups,'date'=>$date]);
 	}

public function sales(){
	$items = Item::all();
	return view('stockmaster.sales',['items'=>$items,'user'=>Auth::user()]);
}

function newsale(Request $request){
	$values = $request->all();
	$sale = Sale::create($values);
	$sales = Sale::all();
	$items = Item::all();
	return view('stockmaster.sales',['newsale'=>$sale,'items'=>$items,'user'=>Auth::user()]);
}


}
