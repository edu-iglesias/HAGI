<?php

class ChartController extends BaseController {

	public function index()
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

	public function by_category()
	{
		$myQuery = govfunds_by_category();
		return $myQuery;

		return View::make('charts/funds_by_category');
	}

	public function by_agency()
	{
		return View::make('charts/funds_by_agency');
	}

	public function agency_performance()
	{
		return View::make('charts/agency_performance');
	}

	public function comparison_category()
	{
		return View::make('charts/comparison_by_category');
	}

	public function comparison_current()
	{
		return View::make('charts/comparison_by_current');
	}
}
