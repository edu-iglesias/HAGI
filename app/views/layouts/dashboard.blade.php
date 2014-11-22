@extends('layouts.sources')

@section('contents')
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="merchant"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
			<li><a href="/bids"><span class="glyphicon glyphicon-list"></span> My Bids</a></li>
			<li><a href=""><span class="glyphicon glyphicon-stats"></span> Summary Report</a></li>
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-th"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
		</ul>
		<div class="attribution">HAGI &copy; 2014. All rights reserved.</div>
	</div><!--/.sidebar-->

	@yield('dashboard-contents')
@stop