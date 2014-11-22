<?php

class QueryController extends BaseController {

	public function index()
	{
		return View::make('query');
	}
	public function columnList()
	{


	if($tablename=="Awarding")
		$tableCode = get_award();
	else if($tablename=="Bidders")
		$tableCode = get_bidders();
	else if($tablename=="Organization")
		$tableCode = get_organization();
	else if($tablename=="Bid Line Item")
		$tableCode = get_bid_line_item();
	else if($tablename=="Bid Information")
		$tableCode = get_bid_information();
	else if($tablename=="Project Location")
		$tableCode = get_project_location();
	else if($tablename=="Organization Business Category")
	
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

		return View::make('query')->with('project_location', $project_location)
		->with('org_bus_cat', $org_bus_cat)->with('bid_line_item', $bid_line_item)
		->with('bid_info', $bid_info)->with('awarding', $awarding)
		->with('bidders', $bidders)->with('organization', $organization);

	
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