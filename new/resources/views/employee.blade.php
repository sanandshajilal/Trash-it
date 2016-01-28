
@extends('app')

@section('meta')

@endsection

@section('style')
	{!! Html::style('css/employee.css') !!}
@endsection

@section('content')


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
                <a class="navbar-brand" href="#">Trash it</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$user->fname}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="empprofile.html"><i class="fa fa-fw fa-user"></i> Profile</a>
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


    <div class="content">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-3"><img class="empbg visible-lg" src="public/img/empbg.png"></div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="section-subtitle">
          <h2>Pickup Details</h2>
          <img src="public/img/shape.png" alt="">
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8">
        <form id="pickupform" name="pickup_form" action="pickup.php">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Booking ID *" id="bookid">
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Amount Paid *" id="amntpaid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Confirm *" id="camnt">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="addNew">
          <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
            <div class="form-group">
              <input id="itemname" class="form-control" name="itemname" type="text" placeholder="Item Name*" >
            </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
        <div class="form-group">
            <!--<input id="itemkg" type="text" class="form-control" placeholder="kg*" id="itemweight">-->
            <select class="form-control">
              <option>1/2 kg</option>
              <option>1 kg</option>
              <option>1.5 kg</option>
              <option>2 kg</option>
              <option>2.5 kg</option>
              <option>5 kg</option>
              <option>10 kg</option>
              <option>20+ kg</option>
              <option>50+ kg</option>
            </select>
        </div>
      </div>

      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <button id="b1" type="button" class="btn btn-default addButton"><i class="fa fa-plus"></i></button>
        </div>
     </div>
     <div class="col-lg-7">
           <button type="button" class="btn btn-default btn-submit">Submit</i></button>
       </div>
   </div>
    </div>
<div class="col-lg-4">
  <div class="thumbnail">
    <h4><i class="fa fa-user"></i>Customer Details </h4>
  <hr/>
  <div class="thumbdetails">
<h5><b>Name :</b><i>  {{$user->fname}}</i></h5>
<h5><b>Address :</b><i>  #11/1 1st Main 5th Cross Bharathi Layout, SG Palaya, Koramangala</i></h5>
<h5><b>Email :</b><i>  {{$user->email}}</i></h5>
<h5><b>Phone :</b><i>  740540640</i></h5>
</div>
  </div>
</div>

  </div>
</div>
  <div class="col-lg-3 col-md-3"></div>
</div>

</body>

@section('script')

<!-- jQuery -->
<script src="{{url('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('js/bootstrap.min.js')}}"></script>

<script>
$(document).ready(function() {
var max_fields      = 10; //maximum input boxes allowed
var wrapper         = $(".addNew"); //Fields wrapper
var add_button      = $(".addButton"); //Add button ID

var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
 e.preventDefault();
 if(x < max_fields){ //max input box allowed
     x++; //text box increment
     $(wrapper).append('<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><div class="form-group"><input id="itemname" class="form-control" name="itemname" type="text" placeholder="Item Name" ></div></div><div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><div class="form-group"><select class="form-control"><option>1/2 kg</option><option>1 kg</option><option>1.5 kg</option><option>2 kg</option><option>2.5 kg</option><option>5 kg</option><option>10 kg</option><option>20+ kg</option><option>30+ kg</option></select></div></div><div class="col-lg-2"><button type="button" class="btn btn-default remove_field"><i class="fa fa-minus"></i></button></div>'); //add input box
 }
});

$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
 e.preventDefault(); $(this).parent('div').remove(); x--;
})
});

</script>

@endsection
