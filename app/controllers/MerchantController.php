<?php

class MerchantController extends BaseController {

	public function index()
	{
		return View::make('merchant/index');
	}

	public function chart2()
	{
		// fetch data from api
		$bidInfos = get_query_bid_info();

		//main array for csv
		$mainarray = array();

		// array variables for individual columns
		$budget = array();
		$businessCategory = array();
		
		// transform object to array
		foreach ($bidInfos as $key) 
		{
			$mainarray[] = (Array) $key;
		}

		// insert array to csv
		$file = fopen("csv/bid_info.csv","w");
		foreach ($mainarray as $line)
		{
		  	$budget[] = $line["approved_budget"];
		  	$businessCategory[] = $line["business_category"];
		}

		// insert array to csv
		$file = fopen("csv/bid_info.csv","w");
		foreach ($mainarray as $line)
		{
		  	fputcsv($file,$line);
		}

		fclose($file); 

		//return $mainarray;

	 	return View::make('chart2')
	 		->with('budget', $budget)
	 		->with('businessCategory', $businessCategory);
	}

}
