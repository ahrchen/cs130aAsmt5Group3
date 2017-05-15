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

	public function getPastVisitorList()
	// return the requested visitors one.  
	//we will need to replace this with code from mySQL database.

	{
		return array(
			"Visitor4" => new Visitor("Visitor4", "Host4"),
			"Visitor5" => new Visitor("Visitor5", "Host5"),
			"Visitor6" => new Visitor("Visitor6", "Host6")
		);
	}
        

//we need to create code to signIn for appending new visitors


	public function signIn()  
	//we will need this code to update mySQL database.

	{

	}
//we need to create code to singOut for signing visitors out

		public function signOut()  
	//we will need this code to update mySQL database.

	{

	}

	
	public function getVisitor($visitorName)
	{
		$visitors = $this->getVisitorList();
		$pastVisitors = $this->getPastVisitorList();
		$allVisitors = array_merge($visitors,$pastVisitors);
		return $allVisitors[$visitorName];
	}
//we will need to create code to setVisitor to create visitor objects for appending
}

?>
