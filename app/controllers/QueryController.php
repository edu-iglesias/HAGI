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
	


	$rows[$tablename] = gen_query_getrow($tablename);

	// transform object to array
		$mainstring = "";
		foreach ($rows[$tablename] as $key) 
		{
			$cols = (Array) $key;
			foreach ($cols as $col) 
			{
			$mainstring[] .= ', '.$col;
			}
		}

	
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