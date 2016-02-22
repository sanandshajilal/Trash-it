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
use App\Sale;
use App\Vendor;
use Excel;
use Auth;
use Redirect;

class AdminController extends Controller
{

  public function __construct(){
    $this->middleware('auth',['except'=>'']);
    //check if admin
    $user = Auth::user();
    if($user->type!=-1){
      Redirect::to('/')->send();
    }
  }

  public function index(){
    $pickups=Pickup::all();
    $feedcount=Feedback::count();
    $pickcount=Pickup::count();
    $picksum=Pickup::sum('amount');
    $salesum=Sale::sum('amount');

    $sales=Sale::all();
    $salecount=Sale::count();
    return view('admin.dashboard',['salecount'=>$salecount,'sales'=>$sales,'picksum'=>$picksum,'salesum'=>$salesum,'pickcount'=>$pickcount,'feedcount'=>$feedcount,'pickups'=>$pickups,'user'=>Auth::user()]);
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
  public function vendorlist(){
    $vendors=Vendor::all();
    return view('admin.vendor',['vendors'=>$vendors,'user'=>Auth::user()]);
  }
  public function itemlist(){
    $items=Item::all();
    $i=0;
    return view('admin.item',['i'=>$i,'items'=>$items,'user'=>Auth::user()]);
  }
  public function report(){
    $pickups=Pickup::all();
    $sales=Sale::all();
    $picksum=Pickup::sum('amount');
    $salesum=Sale::sum('amount');
    $pickcount=Pickup::count();
    $salecount=Sale::count();
    return view('admin.report',['salecount'=>$salecount,'pickcount'=>$pickcount,'sales'=>$sales,'pickups'=>$pickups,'picksum'=>$picksum,'salesum'=>$salesum,'user'=>Auth::user()]);
  }
  public function feedback(){
    $feedbacks=Feedback::all();
    return view('admin.feedback',['feedbacks'=>$feedbacks,'user'=>Auth::user()]);
  }



  public function addemployee(){
    return view('admin.addempl',['user'=>Auth::user()]);
  }
  public function createemployee(Request $request){
    $values = $request->all();
    $values['password'] = bcrypt('123456'); //default password
    User::create($values);
    return redirect('/emplist');
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
    $i=0;
    return view('admin.item',['i'=>$i,'newitem' => $item,'items'=>$items,'user'=>Auth::user()]);
  }
  public function delitem($id){
    $item = Item::find($id);
    $item->delete();
    $items=Item::all();
    $i=0;
    return view('admin.item',['i'=>$i,'items'=>$items,'user'=>Auth::user()]);
}
  public function addvendor(){
    return view('admin.addvendor',['user'=>Auth::user()]);
  }
  public function newvendor(Request $request){
    $values=$request->all();
    $vendor = Vendor::create($values);
    $vendors = Vendor::all();
    return view('admin.vendor',['newvendor'=>$vendor,'vendors'=>$vendors,'user'=>Auth::user()]);
  }
  public function delvendor($id){
    $vendor = Vendor::find($id);
    $vendor->delete();
    $vendors=Vendor::all();
    return view('admin.vendor',['vendors'=>$vendors,'user'=>Auth::user()]);
  }

  public function vendordetails($name){
    $sale = Sale::where('vendor_name','=',$name)->get();
    $vendor = Vendor::where('name','=',$name)->get();
    return view('admin.vendordetails',['vendor'=>$vendor,'name'=>$name,'sale'=>$sale,'user'=>Auth::user()]);
  }

/*export as excel file*/
  public function exportexcel(){
        $report=Excel::create('report', function($excel) {
          $excel->sheet('Pickup Details', function($sheet) {
            $sheet->setOrientation('landscape');
            $pickups=Pickup::all();
            $picksum=Pickup::sum('amount');
        $sheet->loadView('admin.generatepickup',array('pickups'=>$pickups,'picksum'=>$picksum));
      });

        $excel->sheet('Sale Details', function($sheet) {
          $sheet->setOrientation('landscape');
        $sales=Sale::all();
        $salesum=Sale::sum('amount');
    $sheet->loadView('admin.generatesale',array('sales'=>$sales,'salesum'=>$salesum));

    });
    $excel->sheet('Overall Report', function($sheet) {
      $sheet->setOrientation('landscape');
      $picksum=Pickup::sum('amount');
      $salesum=Sale::sum('amount');
      $pickcount=Pickup::count();
      $salecount=Sale::count();
$sheet->loadView('admin.generateoverall',array('picksum'=>$picksum,'salesum'=>$salesum,'pickcount'=>$pickcount,'salecount'=>$salecount));

});


  })->export('xlsx');
}




}
