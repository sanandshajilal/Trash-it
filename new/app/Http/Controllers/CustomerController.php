<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Feedback;
use App\user;
use App\Booking;

class CustomerController extends Controller
{

  public function __construct(){
		$this->middleware('auth',['except'=>'']);
	}

  public function index(){
      $user = Auth::user();
      return view('customer',['user'=>$user]);
  }

  public function booking(Request $request){
    $values = $request->all();
    $booking = Booking::create($values);
    $user = Auth::user();
    return view('customer',['booking' => $booking,'user'=>$user]);
  }
}
