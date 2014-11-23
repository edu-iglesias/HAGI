@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')
    {{ HTML::script('Chart.js') }}
@stop


@section('contents')
	<div style="width: 50%">
		<canvas id="canvas" height="450" width="700"></canvas>
	</div>


	<script>
		var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

		var barChartData = {
			labels : ["January","February","March","April","May","June","July"],
			datasets : [
				{
					fillColor : "rgba(220,220,220,0.5)",
					strokeColor : "rgba(220,220,220,0.8)",
					highlightFill: "rgba(220,220,220,0.75)",
					highlightStroke: "rgba(220,220,220,1)",
					data : [100,200,300,400,500,600,700]
				},
				{
					fillColor : "rgba(151,187,205,0.5)",
					strokeColor : "rgba(151,187,205,0.8)",
					highlightFill : "rgba(151,187,205,0.75)",
					highlightStroke : "rgba(151,187,205,1)",
					data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
				}
				
				
			]

		}
		window.onload = function(){
			var ctx = document.getElementById("canvas").getContext("2d");
			window.myBar = new Chart(ctx).Bar(barChartData, {
				responsive : true
			});
		}
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
