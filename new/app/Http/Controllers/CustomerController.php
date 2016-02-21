<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Feedback;
use App\user;
use App\Booking;
use App\Item;
#use App\Userdetails;

class CustomerController extends Controller
{

  public function __construct(){
		$this->middleware('auth',['except'=>'']);
	}

  public function index(){
      $user = Auth::user();
      $items = Item::all();
      $i=0;
      #$userdetails=Userdetails::all();
      return view('customer',['i'=>$i,'user'=>$user,'items'=>$items]);
  }

  public function booking(Request $request){
    $values = $request->all();
    $booking = Booking::create($values);
    $user = Auth::user();
    $items = Item::all();
    $i=0;
    return view('customer',['i'=>$i,'booking' => $booking,'user'=>$user,'items'=>$items]);
  }
  public function userdetails(Request $request){
    $values = $request->all();
    $userdetails = Userdetails::create($values);
    $user = Auth::user();
    return view('customer',['userdetails' => $userdetails,'user'=>$user]);
  }
}
