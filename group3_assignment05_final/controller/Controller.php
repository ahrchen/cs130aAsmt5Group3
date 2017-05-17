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
			if(!isset($_GET['visitorName']))
		{
			include 'view/header.php';
			include 'view/signIn.php';
			$currentVisitors = $this->model->getVisitorList();
			$avgTimeInBuilding = $this->model->getTimeInAvg();
			include 'view/visitorlist.php';
			$pastVisitors = $this->model->getPastVisitorList();
			include 'view/pastVisitorList.php';
			include 'view/footer.php';
		}

		elseif(isset($_GET['visitorName'])&&isset($_GET['hostName'])&&isset($_GET['signInTime']))
		{
			$this->model->signOutVisitor($_GET['visitorName'],$_GET['hostName'],$_GET['signInTime']);
			include 'view/header.php';
			include 'view/signIn.php';
			$currentVisitors = $this->model->getVisitorList();
			$avgTimeInBuilding = $this->model->getTimeInAvg();
			include 'view/visitorlist.php';
			$pastVisitors = $this->model->getPastVisitorList();
			$avgTimeInBuilding = $this->model->getTimeInAvg();
			include 'view/pastVisitorList.php';
			include 'view/footer.php';
			//Sign out.
		}

		elseif(isset($_GET['visitorName'])&&isset($_GET['hostName']))
		{
			//Sign in
			$this->model->signInVisitor($_GET['visitorName'],$_GET['hostName']);
			include 'view/header.php';
			include 'view/signIn.php';
			$currentVisitors = $this->model->getVisitorList();
			$avgTimeInBuilding = $this->model->getTimeInAvg();
			include 'view/visitorlist.php';
			$pastVisitors = $this->model->getPastVisitorList();
			include 'view/pastVisitorList.php';
			include 'view/footer.php';
			//Sign out.
		}
		//else
		//{
		//	$signOut = $this->model->getSignOut($_GET['visitorName'],$_GET['hostName'],$_GET['signOutTime']);
		//}
		
		
	}
}

?>
