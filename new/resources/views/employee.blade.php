
@extends('app')

@section('meta')

@endsection

@section('style')
	{!! Html::style('css/employee.css') !!}
@endsection

@section('content')

<body class="emp_body" ng-app="app" style="background-image: url({{url('img/empbg.jpg')}})">
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
                <a class="navbar-brand logo" href="#intro"><img src="{{url('img/logo_emp.png')}}"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{$user->fname}} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{url('/empprofile')}}"><i class="fa fa-fw fa-user"></i> Profile</a>
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


    <div class="content" ng-controller="Controller">
	   <div class="container-fluid">
    	<div class="row">
		    <div class="col-lg-3 col-md-3 col-sm-3"></div>
		    <div class="col-lg-6 col-md-6 col-sm-6">
					<div class="row">
						<div class="col-lg-3">
						</div>
					<div class="col-lg-6">
						<div class="alert alert-success fade in">
							<a href="#" class="close fade out" data-dismiss="alert" aria-label="close">&times;</a>
							You have <strong>{{$notify}}</strong> new bookings !
						</div>
					</div>
				</div>
					<div class="section-subtitle">
	          <h2>Pickup Details</h2>
	          <img src="{{url('img/shape.png')}}" alt="">
	        </div>

	        <div class="row">

	          <div class="col-lg-8 col-md-8 col-sm-8">

							<ul ng-show="error" class="alert alert-danger">
								<li>Error.</li>
							</ul>

			        <form id="pickupform" name="pickup_form" action="pickup.php">
				        <div class="form-group">
									<!-- sorting logic has to be done -->
									<select ng-model="booking_id" ng-change="user_details" class="form-control" style="width:425px;">
										<option disabled="true" selected="true">*** Pickups Pending ***</option>
										@foreach($tobedone as $key => $value)
										  @if($value->pickdate==$date)
											<option value="{{$value->id}}">{{$value->id}} : {{$value->name}}</option>
											@endif
										@endforeach
									</select>
				        </div>
				        <!--div class="row">
				          <div class="col-lg-6">
				            <div class="form-group">
				                <input ng-model="amount" type="number" class="form-control" placeholder="Amount Paid *" id="amntpaid">
				            </div>
				          </div>
				          <div class="col-lg-6">
				            <div class="form-group">
				                <input type="number" class="form-control" placeholder="Confirm *" id="camnt">
				            </div>
				          </div>
				        </div-->
								<!-- dynamic fields -->

								<!-- List of added items -->
								<ul class="list-group">
			            <li class="list-group-item" ng-repeat="item in items">
										@{{item.name}} : @{{item.weight}}
			             <button type="button" ng-click="removeItem($index)" class="close"><span>&times;</span></button>
			            </li>
			          </ul>
								<!--end of list -->

								<div class="row" ng-show="visible">
				          <div class="col-md-5 col-sm-5">
				            <div class="form-group">
											<select
														ng-model="itemname"
														ng-options="option.name for option in allitems" class="form-control" style="width:170px;">
											</select>
				            </div>
				      		</div>
						      <div class="col-md-3 col-sm-3">
						        <div class="form-group">
											<select class="form-control" ng-init="weight = weights[0]"
														ng-model="weight"
														ng-options="option.w for option in weights">
											</select>
						        </div>
					      	</div>
									<div class="col-md-2 col-sm-2">
										<a ng-click="pushItem(itemname,weight)" class="btn btn-default"><i class="fa fa-plus"></i> Add Item</a>
									</div>
					      </div>

								<div class="row">
				          <div class="col-lg-12">
				            <div class="form-group">
				                <!--input ng-model="amount" type="number" class="form-control" placeholder="Amount Paid *" id="amntpaid"-->
												<h3>Total Amount : &#8377 @{{amount}}</h3>
				            </div>
				          </div>
				          </div>



					      <div class="form-group">
					           <button type="button" ng-click="formsubmit()" class="btn btn-default btn-submit">Submit</button>
					      </div>
							</form>
   				  </div>

					  <!-- Right Section -->

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

						<div class="col-lg-3 col-md-3"></div>
				  </div>
				</div>
			</div>
		</div>
	</div>

	<div style="height:50px;"></div><!--padding-->



@endsection

@section('script')

<!-- jQuery -->
<script src="{{url('js/jquery.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{url('js/bootstrap.min.js')}}"></script>

<script src="{{url('js/angular/angular.min.js')}}"></script>
<script src="{{url('js/angular/angular-resource.min.js')}}"></script>
<script>
/* Behold some awesomeness here */



(function() {
	'use strict';

	angular.module('app', ['ngResource'])
	.constant("CSRF_TOKEN", '{!! csrf_token() !!}')
	.factory('Resource',function ($resource) {
			return $resource("{{url("/items")}}", {},
			{
					get:{method:'GET',params: {}, cache:false,isArray:true},
					post: {method:'POST',cache:false,isArray:false,url:'{{url("/pickup")}}'},
			});
	})
	.controller('Controller', function($scope,Resource){


			$scope.weights = [{w:' 0.5 kg',val:0.5},{w:'1 kg',val:1},{w:' 1.5 kg',val:1.5},{w:' 2 kg',val:2},
								{w:' 2.5 kg',val:2.5},{w:' 5 kg',val:5},{w:' 10 kg',val:10},{w:' 20+ kg',val:20},{w:' 50+ kg',val:50}];

			$scope.items = [];
			$scope.visible = true;
			$scope.itemname = '';
			$scope.error = false;
			$scope.amount = 0;

			Resource.get({}, function (response) {
				$scope.allitems = response;
			  $scope.itemname = $scope.allitems[0];
				console.log(response);
			});

			$scope.pushItem = function(item,weight){
				if(item!=''&&weight!=''){
					$scope.items.push({name:item.name,id:item.id,price:item.price,weight:weight.w,wval:weight.val});
					$scope.itemname = $scope.allitems[0];
					$scope.weight = $scope.weights[0];
					recompute();
				}
			}

			var recompute = function(){
				var amount =0;
				for(var i=0;i<$scope.items.length;i++){
			    var item = $scope.items[i];
					amount+=item.price*item.wval;

				}
				$scope.amount = amount;
			}

			$scope.removeItem = function(index){
				$scope.items.splice(index,1);
				recompute();
			}


			$scope.formsubmit = function(){

				/* Do JS validation here */

				var r = new Resource();
				r.booking_id = $scope.booking_id;
				r.amount = $scope.amount;
				var details = [];
				for (var i=0;i<$scope.items.length;i++) {
					var obj = $scope.items[i];
					details.push({id:obj.id,name:obj.name,weight:obj.weight});
				}

				r.items = JSON.stringify(details);

				r.$post({},function(response){
					console.log(response);
					//recorded successfully.
					window.location.href="{{url('pickup')}}"+"/"+response.id;

				},function(response){
					console.log(response);
					$scope.error = true;
					//error. Handle the error
				});


			}

	});

})();

</script>

@endsection
