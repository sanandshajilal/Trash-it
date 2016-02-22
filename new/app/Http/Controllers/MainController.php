<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;
use App\user;
use App\Booking;
use App\Item;

class MainController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest'); //redirect's user if authenticated.
    }

    function index(){
      $items=Item::all();
      $i=0;
      return view('main',['i'=>$i,'items'=>$items]);

    }
    function contact(Request $request){
      $values = $request->all();
      $feedback = FeedBack::create($values);
      $items=Item::all();
      $i=0;
      return view('main',['i'=>$i,'contact' => $feedback,'items'=>$items]);
    }

   /* function register(Request $request){
      $values = $request->all();
      User::create($values);
      $items=Item::all();
      $i=0;
      return view('main',['items'=>$items,'i'=>$i,'values' => $values]);
    }*/

    /* when no users are logged this route will be used. see customer controller for the other one. */

    function booking(Request $request){
      $values = $request->all();
      $booking = Booking::create($values);
      $items=Item::all();
      return view('main',['booking' => $booking,'items'=>$items]);
    }

}
