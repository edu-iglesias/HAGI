<?php

class QueryController extends BaseController {

	public function index()
	{

	$rows = gen_query_getrow("Project Location");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$project_location = $mainarray;

		$rows = gen_query_getrow("Organization Business Category");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$org_bus_cat = $mainarray;


		$rows = gen_query_getrow("Bid Line Item");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$bid_line_item = $mainarray;

	$rows = gen_query_getrow("Bid Information");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$bid_info = $mainarray;


	$rows = gen_query_getrow("Awarding");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$awarding = $mainarray;

	$rows = gen_query_getrow("Bidders");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$bidders = $mainarray;

	$rows = gen_query_getrow("Organization");

	// transform object to array
		$mainarray = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray[] = $col;
			}
		}

		$organization = $mainarray;

		return View::make('query')->with('tb1', $project_location)
		->with('tb2', $org_bus_cat)->with('tb3', $bid_line_item)
		->with('tb4', $bid_info)->with('tb5', $awarding)
		->with('tb6', $bidders)->with('tb7', $organization);

	
}
public function tableList()
{
	return array(
	"Awarding",
	"Bidders",
	"Organization",
	"Bid Line Item",
	"Bid Information",
	"Project Location",
	"Organization Business Category"
		);
}

}