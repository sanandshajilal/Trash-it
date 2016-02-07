<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <title>Trash it Employee</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/empprofile.css')}}" rel="stylesheet">
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/employee')}}">Trash it</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav nav_n navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Livin Davis <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-truck"></i> Tasks</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{url('/auth/logout')}}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<section class="profile-section">
    <div class="container">
        <div class="row profile">
    		<div class="col-md-3">
    			<div class="profile-sidebar">
    				<!-- SIDEBAR USERPIC -->
    				<div class="profile-userpic">
    					<img src="{{url('img/about/2.jpg')}}" class="img-responsive" alt="">
    				</div>
    				<!-- END SIDEBAR USERPIC -->
    				<!-- SIDEBAR USER TITLE -->
    				<div class="profile-usertitle">
    					<div class="profile-usertitle-name">
    						Livin Davis
    					</div>
    					<div class="profile-usertitle-job">
    						Desigination
    					</div>
    				</div>
    				<!-- END SIDEBAR USER TITLE -->
    				<!-- SIDEBAR BUTTONS -->
    				<div class="profile-userbuttons">
    					<button type="button" class="btn btn-success btn-sm">something</button>
    					<button type="button" class="btn btn-danger btn-sm">something</button>
    				</div>
    				<!-- END SIDEBAR BUTTONS -->
    				<!-- SIDEBAR MENU -->
    				<div class="profile-usermenu">
    					<ul class="nav">
    						<li class="active">
    							<a data-toggle="tab" href="#overview">
    							<i class="glyphicon glyphicon-home"></i>
    							Overview </a>
    						</li>
    						<li>
    							<a data-toggle="tab" href="#acc-settings">
    							<i class="glyphicon glyphicon-user"></i>
    							Account Settings </a>
    						</li>
    						<li>
    							<a data-toggle="tab" href="#tasks" target="_blank">
    							<i class="glyphicon glyphicon-ok"></i>
    							Tasks </a>
    						</li>
    						<li>
    							<a data-toggle="tab" href="#help">
    							<i class="glyphicon glyphicon-flag"></i>
    							Help </a>
    						</li>
    					</ul>
    				</div>
    				<!-- END MENU -->
    			</div>
    		</div>
    		<div class="col-md-9 tab-content">
          <div id="overview" class="tab-pane fade in active">
             <h3>Overview</h3>
               <p>bla bla bla blaaablaaa !</p>
          </div>
          <div id="acc-settings" class="tab-pane fade">
            <h3>Account Settings</h3>
             <p>bla bla bla blaaablaaa !</p>
        </div>
        <div id="tasks" class="tab-pane fade">
          <h3>Tasks</h3>
           <p>bla bla bla blaaablaaa !</p>
      </div>
      <div id="help" class="tab-pane fade">
        <h3>Help</h3>
         <p>bla bla bla blaaablaaa !</p>
    </div>

    		</div>
    	</div>
    </div>
    <br>
    <br>
</section>




    <!-- jQuery -->
    <script src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('js/bootstrap.min.js')}}"></script>
