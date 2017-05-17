<?php 

	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();

	if (isset($_GET['source'])) {
    highlight_file($_SERVER['SCRIPT_FILENAME']);
    exit;
	}

?>