<?php

function govfunds_by_category()
{
	$tablename = "Bid Information";
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
		$tableCode = get_organization_business_category();

	$sql = "SELECT classification, SUM('approved_budget')".' '.'FROM "'.$tableCode.'" LIMIT 100 ';
	
	$results = get_query($sql);
}
/*
function getorgname()
{
	$tablename = "Bid Inform";
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
		$tableCode = get_organization_business_category();

	$sql = 'SELECT classification, SUM('approved_budget') FROM "'.$tableCode.'" LIMIT 100 ';
	
	$results = get_query($sql);
}
*/
function gen_sample_query($tablename, $preextension, $mainstring, $extension)
{
	$tableCode = "";

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
		$tableCode = get_organization_business_category();

	$sql = 'SELECT '.$preextension.' '.$mainstring.' FROM "'.$tableCode.'"'.$extension.' LIMIT 100';
		return $sql;
}

function all_query()
{
	$queries=array();
	//1 CHART
	$queries[]=gen_sample_query('Bid Information','', "classification, SUM('approved_budget')", '');
	
	$queries[]=gen_sample_query('Awardings','', "org_id, COUNT('awarded_title')", '');
	
}


//
function gen_query_getrow($tablename)
{
	$tableCode = "";

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
		$tableCode = get_organization_business_category();

	$sql = 'SELECT * FROM "'.$tableCode.'" LIMIT 1 ';
	
	$results = get_query($sql);

	// transform object to array
	$mainarray = array();

	foreach ($results as $key) 
	{
		$mainarray[] = (Array) $key;
	}
	$colarray = array();
	foreach ($mainarray as $main) 
	{
		$colarray = array_keys ($main);

	}

	return $colarray;


}





function gen_query($tablename, $field, $condition, $literal, $orderfield, $order, $show, $unique)
{
	$tableCode = "";
	
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
		$tableCode = get_organization_business_category();

	$extension = "";
	$preextension ="";

	if($literal!=NULL&&$condition!=NULL)

				$extension .= 'WHERE '.$field.' '.$condition.' '."'".$literal."' ";
	if($order!=NULL&&$orderfield!=NULL)
				$extension .= 'ORDER BY '.$orderfield.' '.$order;
	if($unique!=0)
				$preextension = ' DISTINCT';
	if($show!=1)
	{
	
		$rows = gen_query_getrow($tablename);

	// transform object to array
		$mainstring = "";
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
				if($col!=$field)
					$mainstring .= ', '.$col;
			}
		}
		 $mainstring = substr($mainstring, 1);
	}


	if($mainstring!=NULL)
		$mainstring="*";

	$sql = 'SELECT '.$preextension.' '.$mainstring.' FROM "'.$tableCode.'"'.$extension.' LIMIT 100';
			
	$results = get_query($sql);

		return $results;

}




function gen_query_sql($tablename, $field, $condition, $literal, $orderfield, $order, $show, $unique)
{
	$tableCode = "";
	
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
		$tableCode = get_organization_business_category();

	$extension = "";
	$preextension ="";

	if($literal!=NULL&&$condition!=NULL)
				$extension .= 'WHERE '.$field.' '.$condition.' '."'".$literal."' ";
	if($order!=NULL&&$orderfield!=NULL)
				$extension .= 'ORDER BY '.$orderfield.' '.$order;
	if($unique!=0)
				$preextension = ' DISTINCT';
	if($show!=1)
	{
	
		$rows = gen_query_getrow($tablename);

	// transform object to array
		$mainstring = "";
		foreach ($rows as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
				if($col!=$field)
					$mainstring .= ', '.$col;
			}
		}
		 $mainstring = substr($mainstring, 1);
	}


	if($mainstring!=NULL)
		$mainstring="*";

	$sql = 'SELECT '.$preextension.' '.$mainstring.' FROM "'.$tableCode.'"'.$extension.' LIMIT 100';
		


		return $sql;

}



// My common functions

	function get_query($sql)
	{	
		$qryStr =str_replace(' ', '%20', $sql);	//return $qryStr;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://philgeps.cloudapp.net:5000/api/action/datastore_search_sql?sql='.$qryStr );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, '3');
		$content = trim(curl_exec($ch));
		curl_close($ch);
		
		$readResults = json_decode($content);
		$specifics = $readResults->result->records;

		return $specifics;
	}
	function get_query_bid_info()
	{	
		$sql = 'SELECT * FROM "'.get_bid_information().'" LIMIT 5';
	
		$results = get_query($sql);

		return $results;
	}
	function get_classifications()
	{	
		$sql = 'SELECT classification, COUNT(ref_no), SUM(approved_budget) FROM "'.get_bid_information().'" GROUP BY classification LIMIT 100';
	
		$results = get_query($sql);

		return $results;
	}
	function get_business_categories()
	{	
		$sql = 'SELECT business_category, COUNT(ref_no), SUM(approved_budget) FROM "'.get_bid_information().'" GROUP BY business_category LIMIT 100';
	
		$results = get_query($sql);

		return $results;
	}
	function get_check_org($org)
	{	
		$sql = 'SELECT * FROM "'.get_organization().'" WHERE org_name = '."'".$org."'".' LIMIT 100';
	
		$results = get_query($sql);

		return count($results);
	}

	//Table Names
	function get_award()
	{
		return '539525df-fc9a-4adf-b33d-04747e95f120';
	}
	function get_bidders()
	{
		return '6427affb-e841-45b8-b0dc-ed267498724a';
	}
	function get_organization()
	{
		return 'ec10e1c4-4eb3-4f29-97fe-f09ea950cdf1';
	}
	function get_bid_line_item()
	{
		return 'daa80cd8-da5d-4b9d-bb6d-217a360ff7c1';
	}
	function get_bid_information()
	{
		return 'baccd784-45a2-4c0c-82a6-61694cd68c9d';
	}
	function get_project_location()
	{
		return '116b0812-23b4-4a92-afcc-1030a0433108';
	}
	function get_organization_business_category()
	{
		return '58ea40bf-15e9-4c38-adef-fd93455d8c7e';
	}


?>
