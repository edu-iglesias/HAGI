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
	dd(all_query());

	
});


Route::get('/chart2', 'MerchantController@chart2');


 
/* NEW ROUTES */
Route::get('/query', 'QueryController@index');


Route::post('/query', 'QueryController@getquery');
Route::post('/savequery', 'QueryController@savequery');

