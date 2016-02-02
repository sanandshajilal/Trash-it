<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;
use App\user;
use App\Booking;

class MainController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('guest'); //redirect's user if authenticated.
    }

    function index(){
      return view('main');

    }
    function contact(Request $request){
      $values = $request->all();
      $feedback = FeedBack::create($values);
      return view('main',['contact' => $feedback]);
    }

   /* function register(Request $request){
      $values = $request->all();
      User::create($values);
      return view('main',['values' => $values]);
    }*/

    /* when no users are logged this route will be used. see customer controller for the other one. */

    function booking(Request $request){
      $values = $request->all();
      $booking = Booking::create($values);
      return view('main',['booking' => $booking]);
    }

}
