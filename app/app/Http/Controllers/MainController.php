<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;
use App\ReDemo;
use App\Item;

class MainController extends Controller
{
    //

    function index(){
      return view('main')
      ->with('items',Item::all());
    }
    function contact(Request $request){
      $values = $request->all();
      FeedBack::create($values);
      return view('main',['values' => $values,'items'=>Item::all()]);
    }
    function demo(Request $request){
      $values = $request->all();
      ReDemo::create($values);
      return view('main',['values' => $values,'items'=>Item::all()]);
    }

}
