<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Item;
use App\Booking;
use App\Pickup;
use DB;

class EmployeeController extends Controller
{

    public function index(){
      $items = Item::all();
      $bookings = Booking::all();
      $date=date('Y-m-d');
      $ids = Pickup::lists('booking_id');

  		$tobedone = DB::table('bookings')->whereNotIn('id',$ids)->get(); //bookings which are not in pickups
      $notify = DB::table('bookings')->whereNotIn('id',$ids)->count();

      return view('employee',['user'=>Auth::user(),'items'=>$items,'bookings'=>$bookings,'date'=>$date,'tobedone'=>$tobedone,'notify'=>$notify]);
    }

    /* should use an appropriate controller for items. But for a quick hack */

    public function items(){
      $items = Item::all();
      return $items;
    }

    function getbooking($id){
      $booking = Booking::find($id);
      return $booking;
    }

    public function pickup(Request $request){
      return Pickup::create($request->all());
    }

    public function viewpickup($id){
      $pickup = Pickup::find($id);
      $pickup->items= json_decode($pickup->items);
      return view('employee.pickup',['pickup'=>$pickup,'user'=>Auth::user()]);
    }

    public function empprofile(){
      return view('employee.empprofile',['user'=>Auth::user()]);
    }
}
