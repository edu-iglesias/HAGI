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
	$bidInfos = get_query_bid_info();
	
	return View::make('chart')->with('bidInfos',$bidInfos);
});