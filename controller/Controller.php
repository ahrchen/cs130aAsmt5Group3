<?php
include_once("model/Model.php");

class Controller {
	public $model;

	public function __construct()  
	{
		$this->model = new Model();
	}

	public function invoke()
	{
		//functions go in here
			if(!isset($_GET['visitor']))
		{
			//no special visitors were requested, we'll show a list of all visitors
			include 'view/header.php';
			include 'view/signIn.php';
			include 'view/signOut.php';
			$currentVisitors = $this->model->getVisitorList();
			include 'view/visitorlist.php';
			$pastVisitors = $this->model->getPastVisitorList();
			include 'view/pastVisitorList.php';

			include 'view/footer.php';

		}
		else
		{
			//show the requested visitor, probably include a button to sign out.
			$visitor = $this->model->getVisitor($_GET['visitor']);
			include 'view/viewVisitor.php';

			//call function to pull in information for new visit, need new view page for login form
		}
	}
}

?>
