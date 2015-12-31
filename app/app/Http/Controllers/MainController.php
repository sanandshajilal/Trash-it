<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feedback;

class MainController extends Controller
{
    //

    function index(){
      return view('main');
    }
    function contact(Request $request){
      $values = $request->all();
      FeedBack::create($values);
      return view('main',['values' => $values]);
    }

}