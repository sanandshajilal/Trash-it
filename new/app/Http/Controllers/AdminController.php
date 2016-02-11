<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AdminController extends Controller
{


  public function index(){
    return view('admin.dashboard',['user'=>Auth::user()]);
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
  public function report(){
    return view('admin.report',['user'=>Auth::user()]);
  }
}
