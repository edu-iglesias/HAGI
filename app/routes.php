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


