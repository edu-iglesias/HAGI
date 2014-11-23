@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')
    {{ HTML::script('Chart.js') }}
@stop


@section('contents')
	<div id="canvas-holder" align="center">
		<br><br><br>
		<canvas id="chart-area" width="300" height="300"/>
	</div>

	<script>
		var pieData = [
			{
				value: 300,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Red"
			},
			{
				value: 50,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Green"
			},
			{
				value: 100,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Yellow"
			},
			{
				value: 40,
				color: "#949FB1",
				highlight: "#A8B3C5",
				label: "Grey"
			},
			{
				value: 120,
				color: "#4D5360",
				highlight: "#616774",
				label: "Dark Grey"
			}
		];

		window.onload = function(){
			var ctx = document.getElementById("chart-area").getContext("2d");
			window.myPie = new Chart(ctx).Pie(pieData);
		};
	</script>

	<br><br><br>
	<table width="90%" class="table">
		<thead>
			<th>haha</th>
			<th>hafdfd</th>
			<th>hssss</th>
		</thead>
		<tbody>
			<td>dsdsdsds</td>
			<td>dsdsdsds</td>
			<td>dsdsdsds</td>
		</tbody>


	</table>
@stop
