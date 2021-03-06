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
								<li>
										<a href="{{url('/report')}}"><i class="fa fa-fw fa-area-chart"></i> Reports</a>
								</li>
                <li class="active">
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
                          Feedbacks
                      </h1>
                      <ol class="breadcrumb">
                          <li class="active">
                              <i class="fa fa-folder-open"></i> Know your Customers !
                          </li>
                      </ol>
                  </div>
              </div>
							<!--content-->
							<div class="row">
                  <div class="col-lg-12">
										<table class="table table-striped">
											<tr>
												<th>Date</th>
												<th>Name</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Message</th>
												<th>Reply</th>
											</tr>
                     @foreach($feedbacks as $feedback)
											<tr>
												<td>11/2/3</td>
												<td>{{$feedback->name}}</td>
												<td>{{$feedback->email}}</td>
												<td>{{$feedback->phone}}</td>
												<td>{{$feedback->message}}</td>
												<td>
													<a href="#" class="btn btn-default"><i class="fa fa-mail-reply"></i></a>
												</td>
											</tr>
											@endforeach
											</table>

									</div>
								</div>



              <script src="js/jquery.js"></script>

                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>

                <!-- Morris Charts JavaScript -->
                <script src="js/plugins/morris/raphael.min.js"></script>
                <script src="js/plugins/morris/morris.min.js"></script>
                <script src="js/plugins/morris/morris-data.js"></script>

              @endsection
