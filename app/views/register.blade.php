@extends('layouts.home')

@section('pagetitle')
    Login
@stop

@section('css')


    {{ HTML::script('combobox/docs/js/jquery-2.1.1.min.js') }}
    {{ HTML::script('combobox/docs/js/bootstrap-3.2.0.min.js') }}
    {{ HTML::script('combobox/docs/js/prettify.js') }}

    {{ HTML::style('combobox/dist/css/bootstrap-multiselect.css') }}
    {{ HTML::script('combobox/dist/js/bootstrap-multiselect.js') }}
  
    {{ HTML::script('https://www.google.com/jsapi') }}
     {{ HTML::script('http://code.jquery.com/jquery-1.10.1.min.js') }}
      {{ HTML::script('https://jquery-csv.googlecode.com/files/jquery.csv-0.71.js') }}

      <?php 
    $bidInfos = get_query_bid_info();

    // transform object to array
    $mainarray = array();
    foreach ($bidInfos as $key) 
    {
        $mainarray[] = (Array) $key;
    }



      ?>
   <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() 
      {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],

        <?php foreach ($mainarray as $bid) {
            
          ?>

          [ {{$bid['classification']}} , {{$bid['business_category']}} , {{$bid['ref_no']}} ],
          <?php } ?>
         
        ]);

        var options = {
          title: 'Company Performance',
          vAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>
@stop

@section('contents')
 <?php 
ini_set("memory_limit","7G");
ini_set('max_execution_time', '0');
ini_set('max_input_time', '0');
set_time_limit(0);
ignore_user_abort(true);  

$products = csvToArray('products.csv');
foreach($products as $key => $product)
{
  if(!$product = Product::whereSku($product['sku'])->first(['id']))
  {
    $product = new Product;
    $product->price = $product['productPrice'];
    $product->old_price = $product['productOldPrice'];
    $product->save();
  }
  else {
    $product = Product::find($product->id);
    $product->price = $product['productPrice'];
    $product->old_price = $product['productOldPrice'];
    $product->save();
  }
}
?>
 <div id="chart_div"  style="width: 800px; height: 300px"></div>
    
@stop
