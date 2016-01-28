@extends('app')

@section('meta')

@endsection

@section('style')
	{!! Html::style('css/carousel.css') !!}
  {!! Html::style('css/style.css') !!}
@endsection

@section('content')

<body data-spy="scroll" data-target="#navbar-fixed-top">

@include('main.nav')

@include('main.intro')

@include('main.services')

@include('main.about')

@include('main.how')

@include('main.blog')

@include('main.login')

@include('main.contact')

@endsection

@section('script')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery.easing.min.js')}}"></script>
<script src="{{url('js/bootstrapv2.min.js')}}"></script>
<script src="{{url('js/nav-scroll.js')}}"></script>
@endsection
