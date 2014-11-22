@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')
    {{ HTML::script('Chart.js') }}
@stop

@section('contents')
    
    <div style="width: 50%">
        <canvas id="canvas" height="450" width="600"></canvas>
    </div>

    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        var barChartData = 
        {
            labels : ["{{ $businessCategory[0] }}","{{ $businessCategory[1] }}","{{ $businessCategory[2] }}","{{ $businessCategory[3] }}","{{ $businessCategory[4] }}"],
            datasets : [
                {
                    fillColor : "rgba(220,220,220,0.5)",
                    strokeColor : "rgba(220,220,220,0.8)",
                    highlightFill: "rgba(220,220,220,0.75)",
                    highlightStroke: "rgba(220,220,220,1)",
                    data : [{{ $budget[0] }},{{ $budget[1] }},{{ $budget[2] }},{{ $budget[3] }},{{ $budget[4] }}]
                }

                
                
            ]

        }
        window.onload = function()
        {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx).Bar(barChartData, {
                responsive : true
            });
        }
    </script>
@stop
