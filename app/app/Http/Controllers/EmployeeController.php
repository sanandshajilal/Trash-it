<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

    public function index(){
      return Auth::user();
    }
}
