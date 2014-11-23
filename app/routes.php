<?php

Route::get('/', function()
{
	return View::make('main');
});

/* REGISTER ROUTES */
Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

/* MERCHANT ROUTES */
Route::get('/merchant', 'MerchantController@index');
Route::get('/bids', function()
{
	return View::make('merchant/bids');
});


/* GOVERNMENT ROUTES */




Route::get('/chart', function()
{
	// fetch data from api
	$bidInfos = get_query_bid_info();


	// transform object to array
	$mainarray = array();
	foreach ($bidInfos as $key) 
	{
		$mainarray[] = (Array) $key;
	}

	// insert array to csv
	$file = fopen("csv/bid_info.csv","w");
	foreach ($mainarray as $line)
	{
	  	fputcsv($file,$line);
	}
	fclose($file); 

});
Route::get('/testc', function()
{
	$query = gen_query_getrow("Awarding");

	dd($query);
});

Route::get('/test', function()
{
	// $query = gen_query("Awarding", "award_title", "=", "BALLPEN","budget", "ASC", "0", "1");
	// //$query2 = gen_query("Awarding", "award_title", "=", "BALLPEN","budget", "ASC", "0", "1");
	// //dd($query1);
	// //$query = array_udiff($query1, $query2, $query1);
	// dd($query);

	
});


Route::get('/chart', 'ChartController@index');


 
/* NEW ROUTES */
Route::get('/query', 'QueryController@index');


Route::post('/query', 'QueryController@getquery');
Route::post('/savequery', 'QueryController@savequery');

/* Charts for basic search */
Route::get('/by_category', 'ChartController@by_category');
Route::get('/by_agency', 'ChartController@by_agency');
Route::get('/agency_performance', 'ChartController@agency_performance');
Route::get('/comparison_category', 'ChartController@comparison_category');
Route::get('/comparison_current', 'ChartController@acomparison_current');


