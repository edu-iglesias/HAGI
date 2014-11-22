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



/* TEST ROUTES */
Route::get('/test', function()
{
	$sql = 'SELECT * FROM "'.get_award().'" LIMIT 5';
	
	$results = get_query($sql);

	dd($results);
});


