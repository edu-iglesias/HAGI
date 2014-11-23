<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('pagetitle')</title>
		<link rel="shortcut icon" href="{{ asset('favicon.png') }}">

		{{ HTML::style('dash/css/bootstrap.min.css') }}
		{{ HTML::style('dash/css/datepicker3.css') }}
		{{ HTML::style('dash/css/styles.css') }}
		{{ HTML::style('dash/css/custom.css') }}
		@yield('css')

		@yield('javascripts')
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header col-lg-9 col-centered">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><span>iQuery</a>
					<ul class="user-menu">
						<li class="dropdown pull-right">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
								<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		@yield('contents')
	</body>

</html>