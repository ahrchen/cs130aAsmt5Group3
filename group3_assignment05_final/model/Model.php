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


	public function signInVisitor($visitorName, $hostName)  
	//we will need this code to update mySQL database.
	{
		$vName = $this->db->escape_string($visitorName);
		$hName = $this->db->escape_string($hostName); 

		$myQuery = $this->db->prepare("INSERT INTO visitorLog 
					(visitorName,
						hostName)
				VALUES ('$vName',
					'$hName');");
		if($myQuery->execute()){
			$myQuery->free_result();
			$myQuery->close();
			return true;
		}
							
	}


//we need to create code to singOut for signing visitors out

	public function signOutVisitor($visitorName,$hostName,$signInTime)  
	//we will need this code to update mySQL database.

	{

		$vName = $this->db->escape_string($visitorName);
		$hName = $this->db->escape_string($hostName); 
		$sTime = $this->db->escape_string($signInTime); 

		$myQuery = $this->db->prepare("UPDATE visitorLog SET signOutTime = current_timestamp WHERE visitorName='$vName' AND hostName='$hName' AND signInTime='$sTime' ;");
		if($myQuery->execute()){
			$myQuery->free_result();
			$myQuery->close();
			return true;
		}
	}

	public function getTimeInAvg()
	{
		$myQuery ="SELECT AVG(TIMESTAMPDIFF(MINUTE, signInTime, signOutTime)) AS average_minute FROM visitorLog WHERE signOutTime IS NOT NULL;";
			return $this->convertQueryToArray($myQuery)[0]['average_minute'];
	}
	
//we will need to create code to setVisitor to create visitor objects for appending

	//store the query into array to be displayed in visitorlist view
	private function convertQueryToArray($myQuery) {

	$result = $this->db->query($myQuery);

      $myVisitors = [];
      $i = 0;
//The following will produce a two dimensional array,
//[[0] =>[[visitorName=>Raymond],[hostName=>Henry],[signInTime=>now()],[signOutTime]=>later()]]
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