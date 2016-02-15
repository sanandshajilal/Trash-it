<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">

		@yield('meta')


    <title>Trash it</title>
		{!! Html::style('css/bootstrap.css') !!}
		{!! Html::style('font-awesome/css/font-awesome.min.css') !!}
		@yield('style')

</head>

@yield('content')

@yield('script')


</body>
</html>
