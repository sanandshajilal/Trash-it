<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

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

      $items=Item::all();
      $i=0;
      $values = $request->all();

      $rules =  [
         'name' => 'required|max:100',
         'adrsl1' => 'required',
         'adrsl2' => 'required',
         'place' => 'required',
         'pin' => 'required|digits:6',
         'email' => 'required|email',
         'phone' => 'required|digits:10',
         'pickdate' => 'required|date_format:Y-m-d|after:today'
       ];
      $validator = Validator::make($request->all(),$rules);
      if ($validator->fails()) {
             return view('main',['i'=>$i,'items'=>$items,'req_errors'=>$validator->errors(),'req_inputs'=>$request->all()]);
             // ['status'=>'fail','error'=>'invalid data',,];
      }


      $booking = Booking::create($values);


      return view('main',['i'=>$i,'booking' => $booking,'items'=>$items]);
    }



}
