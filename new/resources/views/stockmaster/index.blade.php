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
								<li class="active">
										<a href="{{url('/stockmaster')}}"><i class="fa fa-fw  fa-clock-o"></i> Pickups</a>
								</li>
                <li>
										<a href="{{url('/stockmaster')}}"><i class="fa fa-fw fa-money"></i> Sales</a>
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
                          Delayed Pickups <small> Need Attention !</small>
                      </h1>
                      <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-list"></i> Following pickups where not done as per scheduled
                          </li>
                      </ol>
                  </div>
              </div>

              <div class="row">
                    <div class="col-md-12">
                      <table class="table table-striped">
                        <tr>
                          <th>Booking Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone No</th>
                          <th>Expected Date</th>
                          <th>Links</th>
                        </tr>
                        @foreach($bookings as $booking)
                        @foreach($pickups as $pickup)
                        @if($booking->pickdate<$date && $booking->id!=$pickup->booking_id)
                        <tr>
                          <td>{{$booking->id}}</td>
                          <td>{{$booking->name}}</td>
                          <td>{{$booking->email}}</td>
                          <td>{{$booking->phone}}</td>
                          <td>{{$booking->pickdate}}</td>
                          <td>
                            <a href="#" class="btn btn-default">Assign Pickup</a>
                          </td>
                        </tr>
                        @endif
                        @endforeach
                        @endforeach
                        </table>


                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    Completed Pickups <small> </small>
                                </h1>
                                <ol class="breadcrumb">
                                    <li class="active">
                                        <i class="fa fa-list"></i> Following pickups where completed as per scheduled
                                    </li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                              <div class="col-md-12">
                                <table class="table table-striped">
                                  <tr>
                                    <th>Pickup Id</th>
                                    <th>Booking Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Completed Date</th>
                                    <th>Amount Paid</th>
                                    <th>Links</th>
                                  </tr>
                                  @foreach($bookings as $booking)
                                  @foreach($pickups as $pickup)
                                  @if($booking->id==$pickup->booking_id)

                                  <tr>
                                    <td>{{$pickup->id}}</td>
                                    <td>{{$pickup->booking_id}}</td>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->email}}</td>
                                    <td>{{$booking->phone}}</td>
                                    <td>{{$booking->pickdate}}</td>
                                    <td>{{$pickup->amount}}</td>
                                    <td>
                                      <a href="#" class="btn btn-default">Details</a>
                                    </td>
                                  </tr>
                                  @endif
                                  @endforeach
                                  @endforeach
                                  </table>




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
