<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{


  public function index(){
    return view('admin.dashboard');
  }
  public function emplist(){
    return view('admin.employee');
  }
  public function userlist(){
    return view('admin.user',['user'=>$user]);
  }
  public function report(){
    return view('admin.report');
  }
}
