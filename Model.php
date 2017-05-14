<?php
include_once("model/Visitor.php");

class Model {

	public function getVisitorList()
	// return the requested visitors one.  
	//we will need to replace this with code from mySQL database.

	{
		return array(
			"Visitor1" => new Visitor("Visitor1", "Host1"),
			"Visitor2" => new Visitor("Visitor2", "Host2"),
			"Visitor3" => new Visitor("Visitor3", "Host3")
		);
	}
        

//we need to create code to setVisitorList for appending new visitors


	public function setVisitorList()  
	//we will need this code to update mySQL database.

	{

	}

	
	public function getVisitor($visitorName)
	{
		$allVisitors = $this->getVisitorList();
		return $allVisitors[$visitorName];
	}
//we will need to create code to setVisitor to create visitor objects for appending
}

?>
