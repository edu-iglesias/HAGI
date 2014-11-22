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
	return get_query_bid_info();
});


Route::get('/chart', function()
{
	$bidInfos = get_query_bid_info();

	// return View::make('chart')->with('bidInfos',$bidInfos);

	return $bidInfos;
});
