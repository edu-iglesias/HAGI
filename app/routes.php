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


/* GOVERNMENT ROUTES */



/* TEST ROUTES */
Route::get('/test', function()
{
	$sql = 'SELECT * FROM "'.get_award().'" LIMIT 5';
	
	$results = get_query($sql);

	dd($results);
});


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

	dd($bidInfos);

});


Route::get('/chart2', 'MerchantController@chart2');

 
/* NEW ROUTES */
Route::get('/query', 'QueryController@index');