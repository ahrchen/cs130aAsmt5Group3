<?php

class Model {
	private $db;
	
	public function __construct() {
		//Connect to database
		function connectDB() {
		include_once('/students/rchen14/secure/dbVarsAsmt5Grp3.inc');
        $db = new mysqli('localhost', $dbuser, $dbpass, 'test_cs130a_asmt5_group3');
        unset($dbhost, $dbuser, $dbpass, $database);
        return $db;
        }
		$this->db = connectDB();
	}


    // return the visitors inside building.  
	public function getVisitorList()
	{

		$myQuery = "SELECT visitorName, hostName, signInTime, signOutTime
				FROM visitorLog
				WHERE signOutTime IS NULL
				ORDER BY signInTime DESC;";
		return $this->convertQueryToArray($myQuery);

	}//close getVisitorList()

   
    // return the requested visitors one.  
	public function getPastVisitorList()
	


	{
		$myQuery = "SELECT visitorName, hostName, signInTime, signOutTime
				FROM visitorLog
				WHERE signOutTime IS NOT NULL
				ORDER BY signInTime DESC;";
		return $this->convertQueryToArray($myQuery);
	}//close getPastVisitorList()
        

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

	
//we will need to create code to setVisitor to create visitor objects for appending

	//store the query into array to be displayed in visitorlist view
	private function convertQueryToArray($myQuery) {

	$result = $this->db->query($myQuery);
	
      $myVisitors = [];
      $i = 0;
	//The following will produce a two dimensional array [[0][visitorName=>Raymond],[0][hostName=>Henry],[0][signInTime=>now(),[0][signOutTime]=>later()]
      while ($visitor = $result->fetch_assoc()) {
        foreach ($visitor as $field => $value) {
          $myVisitors[$i][$field] = $value;
        }
        $i++;
      }

      $result->free();
      return $myVisitors;
  } // end convertQueryToArray
}

?>
