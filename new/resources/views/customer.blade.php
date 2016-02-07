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

@include('main.user')

@include('main.contact')


@endsection

@section('script')
<script src="{{url('js/jquery.js')}}"></script>
<script src="{{url('js/jquery.easing.min.js')}}"></script>
<script src="{{url('js/bootstrapv2.min.js')}}"></script>
<script src="{{url('js/nav-scroll.js')}}"></script>
<script>
$(document).ready(function() {
    var $btnSets = $('#responsive'),
    $btnLinks = $btnSets.find('a');

    $btnLinks.click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.user-menu>div.user-menu-content").removeClass("active");
        $("div.user-menu>div.user-menu-content").eq(index).addClass("active");
    });
});

$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();

    $('.view').hover(
        function(){
            $(this).find('.caption').slideDown(50); //.fadeIn
        },
        function(){
            $(this).find('.caption').slideUp(50); //.fadeOut
        }
    );
});
</script>
@endsection
