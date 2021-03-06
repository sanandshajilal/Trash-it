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
								<li>
										<a href="{{url('/admin')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
								</li>
								<li>
										<a href="{{url('/emplist')}}"><i class="fa fa-fw fa-male"></i> Employees</a>
								</li>
								<li>
										<a href="{{url('/userlist')}}"><i class="fa fa-fw fa-users"></i> Users</a>
								</li>
								<li>
										<a href="{{url('/vendorlist')}}"><i class="fa fa-fw  fa-suitcase"></i> Vendors</a>
								</li>
								<li>
										<a href="{{url('/itemlist')}}"><i class="fa fa-fw fa-trash"></i> Items</a>
								</li>
								<li  class="active">
										<a href="{{url('/report')}}"><i class="fa fa-fw fa-area-chart"></i> Reports</a>
								</li>
								<li>
									<a href="{{url('/feedback')}}"><i class="fa fa-fw fa-inbox"></i> Feedbacks</a>
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
                          Financial Report <small>  From: date To: date </small>
                      </h1>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">

                      <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-bar-chart"></i> Payments
                          </li>
                      </ol>
											<div class="table-responsive">
													<table class="table table-hover ">
															<thead>
																	<tr>
																			<th>Pickup #</th>
																			<th>Amount (INR)</th>
																	</tr>
															</thead>
															<tbody>
																@foreach($pickups as $pickup)
																	<tr>
																			<td>{{$pickup->id}}</td>
																			<td>{{$pickup->amount}}</td>
																	</tr>
																	@endforeach
															</tbody>
													</table>
											</div>
											<ol class="breadcrumb">
													<li class="active">
														<i class="fa fa-cash"></i>  {{$pickcount}} pickups done !
													</li>
											</ol>
										</div>
										<div class="col-lg-6">

											<ol class="breadcrumb">
													<li class="active">
															<i class="fa fa-bar-chart"></i> Sales
													</li>
											</ol>
											<div class="table-responsive">
													<table class="table table-hover ">
															<thead>
																	<tr>
																			<th>Sale #</th>
																			<th>Vendor Name</th>
																			<th>Amount (INR)</th>
																	</tr>
															</thead>
															<tbody>
																@foreach($sales as $sale)
																	<tr>
																			<td>{{$sale->id}}</td>
																			<td>{{$sale->vendor_name}}</td>
																			<td>{{$sale->amount}}</td>
																	</tr>
																	@endforeach
															</tbody>
													</table>
											</div>
											<ol class="breadcrumb">
													<li class="active">
														<i class="fa fa-cash"></i> {{$salecount}} sales done !
													</li>
											</ol>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
										<hr/>
											<ol class="breadcrumb">
													<li class="active">
														<i class="fa fa-cash"></i>  Amount Paid : {{$picksum}}
													</li>
											</ol>
											<ol class="breadcrumb">
													<li class="active">
														<i class="fa fa-cash"></i>  Amount Got : {{$salesum}}
													</li>
											</ol>
											<ol class="breadcrumb">
													<li class="active">
														<i class="fa fa-cash"></i> Gross Profit : {{$salesum-$picksum}}
													</li>
											</ol>
                     <a href="exportexcel" class="btn btn-default" style="float:right">Generate Excel</a>

                  </div>
              </div>
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
