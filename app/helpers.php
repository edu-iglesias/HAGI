<?php
// My common functions

	function get_query($sql)
	{	
		$qryStr =str_replace(' ', '%20', $sql);	//return $qryStr;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'http://philgeps.cloudapp.net:5000/api/action/datastore_search_sql?sql='.$qryStr );
		//curl_setopt($ch, CURLOPT_URL, 'http://philgeps.cloudapp.net:5000/api/action/datastore_search_sql?sql='. $qryStr); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, '3');
		$content = trim(curl_exec($ch));
		curl_close($ch);
		
		$readResults = json_decode($content);

		$specifics = $readResults->result->records;

		return $specifics;
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
