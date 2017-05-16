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
		
			include 'view/header.php';
			include 'view/signIn.php';
			include 'view/signOut.php';
			$currentVisitors = $this->model->getVisitorList();
			include 'view/visitorlist.php';
			$pastVisitors = $this->model->getPastVisitorList();
			include 'view/pastVisitorList.php';

			include 'view/footer.php';

		
		
	}
}

?>
