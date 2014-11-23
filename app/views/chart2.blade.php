@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')
    {{ HTML::script('Chart.js') }}
@stop

@section('contents')
    
    <div style="margin-left:20px; margin-top:10px; width:50%" align="center" >
        <canvas id="canvas" height="450" width="600"></canvas>
    </div>

    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        var barChartData = 
        {
            labels : ["{{ $businessCategory[0] }}","{{ $businessCategory[1] }}","{{ $businessCategory[2] }}","{{ $businessCategory[3] }}","{{ $businessCategory[4] }}"],
            datasets : [
                {
                    fillColor : "rgba(46, 138, 138, 1)",
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

    <br><br><br>
    <div style="margin-left:10px;margin-top:10px;">
        <table class="table" width="60%">
            <tr>
                <td><b>Business Category</b></td>
                <td><b>Budget</b></td>
            </tr>

                <?php $i = 0 ?>
                @foreach($businessCategory as $key)
                <tr>
                    <td>{{ $businessCategory[$i] }}</td>
                    <td>{{ $budget[$i] }}</td>
                    <?php $i++; ?>
                </tr>
                @endforeach

        </table>
    </div>
    <br><br><br>
@stop
