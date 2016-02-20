@extends('app')

@section('meta')

@endsection

@section('style')
	{!! Html::style('css/sb-admin.css') !!}
  {!! Html::style('css/plugins/morris.css') !!}
@endsection

@section('content')

<body>
<div id="wrapper">

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Trash it</a>
          </div>
          <!-- Top Menu Items -->
          <ul class="nav navbar-right top-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{{$user->fname}} {{$user->lname}}<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li>
                          <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li>
                          <a href="{{url('/auth/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav side-nav">
								<li >
										<a href="{{url('/stockmaster')}}"><i class="fa fa-fw  fa-clock-o"></i> Pickups</a>
								</li>
                <li class="active">
										<a href="{{url('/sales')}}"><i class="fa fa-fw fa-money"></i> Sell</a>
								</li>
						</ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

          <div class="container-fluid">

              <!-- Page Heading -->
              <div class="row">
                  <div class="col-lg-12">
                      <h1 class="page-header">
                          Sell Scraps
                      </h1>
                      <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-paper-plane"></i> Sell segregated scraps to respective vendors
                          </li>
                      </ol>
                  </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
										@if(isset($newsale))
						          <h3 style="text-align:center">Successfull</h3>
						        @endif

						  {!! Form::open(['url'=>'newsale','id'=>'newSaleForm']) !!}

                  <div class="form-group">
                       <select class="form-control" name="item_name">
                         @foreach($items as $item)
                         <option value="{{$item->name}}">{{$item->name}}</option>
                         @endforeach
                       </select>
                   </div>
                   <div class="form-group">
                     <select class="form-control" name="weight">
                       <option value="10">10 kg</option>
                       <option>20 kg</option>
                       <option>50 kg</option>
                       <option>100 kg</option>
                       <option>200 kg</option>
                       <option>300 kg</option>
                       <option>500 kg</option>
                     </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="vendor_name">
												@foreach($vendors as $vendor)
                        <option value="{{$vendor->name}}">{{$vendor->name}}</option>
												@endforeach
                      </select>
                     </div>
                     <div class="form-group">
                          <input type="text" class="form-control" placeholder="Amount Got *" name="amount">
                      </div>
                      <div class="form-group">
                           <input type="text" class="form-control" placeholder="Confirm Amount *" name="camnt">
                       </div>

                       <div class="form-group">
       					           <button  type="submit" class="btn btn-default btn-submit" style="float:right">Submit</button>
       					      </div>

       							</form>




              @endsection

              @section('script')

              <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>

              @endsection
