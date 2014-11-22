<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('pagetitle')</title>

		{{ HTML::style('dash/css/bootstrap.min.css') }}
		{{ HTML::style('dash/css/datepicker3.css') }}
		{{ HTML::style('dash/css/styles.css') }}
		{{ HTML::style('dash/css/custom.css') }}
		@yield('css')

		@yield('javascripts')
	</head>

	<body>
		@yield('contents')
	</body>

</html>