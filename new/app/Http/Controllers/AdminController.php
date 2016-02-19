<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Feedback;
use App\Item;
use App\Booking;
use App\Pickup;
use Auth;

class AdminController extends Controller
{


  public function index(){
    $pickups=Pickup::all();
    $feedcount=Feedback::count();
    $pickcount=Pickup::count();
    $total=0;
    return view('admin.dashboard',['total'=>$total,'pickcount'=>$pickcount,'feedcount'=>$feedcount,'pickups'=>$pickups,'user'=>Auth::user()]);
  }
  public function emplist(){
    $users=User::where('type','=', 0)
               ->orderBy('id', 'desc')
               ->get();
    return view('admin.employee',['users'=>$users,'user'=>Auth::user()]);
  }
  public function userlist(){
    $users=User::where('type','=', 1)
               ->orderBy('id', 'desc')
               ->get();
    return view('admin.user',['users'=>$users,'user'=>Auth::user()]);
  }
  public function itemlist(){
    $items=Item::all();
    return view('admin.item',['items'=>$items,'user'=>Auth::user()]);
  }
  public function report(){
    return view('admin.report',['user'=>Auth::user()]);
  }
  public function feedback(){
    $feedbacks=Feedback::all();
    return view('admin.feedback',['feedbacks'=>$feedbacks,'user'=>Auth::user()]);
  }



  public function addemployee(){
    return view('admin.addempl',['user'=>Auth::user()]);
  }

  public function delemployee($id){
    $user = User::find($id);
    $user->delete();

    $users=User::where('type','=', 0)
               ->orderBy('id', 'desc')
               ->get();
    return view('admin.employee',['users'=>$users,'user'=>Auth::user()]);
  }

  public function additem(){
    return view('admin.additem',['user'=>Auth::user()]);
  }
  function newitem(Request $request){
    $values = $request->all();
    $item = Item::create($values);
    $items=Item::all();
    return view('admin.item',['newitem' => $item,'items'=>$items,'user'=>Auth::user()]);
  }



}
