<?php

class QueryController extends BaseController {


	public function index()
	{


	
	$rows = gen_query_getrow("Project Location");

	// transform object to array
		$mainarray1 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray1[] = $col;
			}
		}

		$project_location = $mainarray1;

		$rows = gen_query_getrow("Organization Business Category");

	// transform object to array
		$mainarray2 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray2[] = $col;
			}
		}

		$org_bus_cat = $mainarray2;


		$rows = gen_query_getrow("Bid Line Item");

	// transform object to array
		$mainarray3 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray3[] = $col;
			}
		}

		$bid_line_item = $mainarray3;

	$rows = gen_query_getrow("Bid Information");

	// transform object to array
		$mainarray4 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray4[] = $col;
			}
		}

		$bid_info = $mainarray4;


	$rows = gen_query_getrow("Awarding");

	// transform object to array
		$mainarray5 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray5[] = $col;
			}
		}

		$awarding = $mainarray5;

	$rows = gen_query_getrow("Bidders");

	// transform object to array
		$mainarray6 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray6[] = $col;
			}
		}

		$bidders = $mainarray6;

	$rows = gen_query_getrow("Organization");

	// transform object to array
		$mainarray7 = array();
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainarray7[] = $col;
			}
		}

		$organization = $mainarray7;

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
public function getquery()
{
    dd(Input::all());
    
	$tablename=Input::get('tableName');
	$field=Input::get('fieldName');

	$condition=Input::get('operator');

	$literal=Input::get('literal');

	$orderfield=Input::get('fieldName');

	$order =Input::get('sort');

	$show=Input::get('show');

	$unique=Input::get('unique');



	if(Input::get('hiddenInput')==1)
	{
		Session::put('sql',  gen_query_sql($tablename, $field, $condition, $literal, $orderfield, $order, $show, $unique));
		Session::put('sqltitle', Input::get('title'));
		return Redirect::to('/query');
	}
	else
	{
	
		$queryResult = gen_query($tablename, $field, $condition, $literal, $orderfield, $order, $show, $unique);

		$convertToArray = (Array) $queryResult;
		return $convertToArray;
		//return View::make("advancedResult");

	}

 		
}

}