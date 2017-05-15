<?php
//I have create all my data instance variables
class Visitor {
	public $visitorName;
	public $hostName;
	public $signInTime;
	public $signOutTime;
	//Contruct the Object via two data variables. singInTime get current time, and signOutTime is input later
	public function __construct($visitorName, $hostName)  
    {  
        $this->visitorName = $visitorName;
	    $this->hostName = $hostName;
	    $this->signInTime = date("F j, Y, g:i a");
	    $this->signOutTime = null;
    } 
}

?>
