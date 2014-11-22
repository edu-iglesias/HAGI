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
	$query = gen_query("Awarding", "award_title", "=", "BALLPEN","budget", "ASC", "0", "1");

	dd($query);
});


Route::get('/chart2', 'MerchantController@chart2');

<<<<<<< HEAD
 
/* NEW ROUTES */
Route::get('/query', 'QueryController@index');
=======
>>>>>>> 45a4a6e17489813ff5dcbc3a3ccb47560f74b7cd
