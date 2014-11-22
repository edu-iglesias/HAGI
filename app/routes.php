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

	dd($bidInfos);
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

Route::get('/test', function()
{
	$query = gen_query_condition_order("Awarding", "award_title", "=", "BALLPEN","budget", "ASC");

	dd($query);
});


Route::get('/chart2', 'MerchantController@chart2');

