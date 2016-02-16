
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

        <div class="col-md-6 col-md-offset-3" style="color:white">

          <h3>Pick Up Details</h3>
          <h4>Status: Success</h4>
          <h4>Amount : {{$pickup->amount}}</h4>
          <h4>Booking id: {{$pickup->booking_id}}</h4>
          <ul class="list-group" style="color:#000">
            @foreach($pickup->items as $key => $value)
              <li class="list-group-item">{{$value->name}} : {{$value->weight}}</li>
            @endforeach
          </ul>


        </div>
		  </div>
    </div>
  </div>

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


			$scope.weights = [{w:' 0.5 kg'},{w:'1 kg'},{w:' 1.5 kg'},{w:' 2 kg'},
								{w:' 2.5 kg'},{w:' 5 kg'},{w:' 10 kg'},{w:' 20+ kg'},{w:' 50+ kg'}];

			$scope.items = [];
			$scope.visible = true;
			$scope.itemname = '';
			$scope.error = false;

			Resource.get({}, function (response) {
				$scope.allitems = response;
			  $scope.itemname = $scope.allitems[0];
				console.log(response);
			});

			$scope.pushItem = function(item,weight){
				if(item!=''&&weight!=''){
					$scope.items.push({name:item.name,id:item.id,weight:weight.w});
					$scope.itemname = $scope.allitems[0];
					$scope.weight = $scope.weights[0];
				}
			}

			$scope.removeItem = function(index){
				$scope.items.splice(index,1);
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
