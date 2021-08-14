<?php
include 'ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);

// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;

	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load();
		$this->model = new Model();
		// determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view', $data);
	}

	function apiCreateTable()
	{
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('view', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('view', $data);
	}
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view', $data);
	}

	function getDataJson()
    {
        $data = $this->model->dbGetData();
        echo json_encode($data);
    }
	function apiGetFlickrService()
	{
		$this->load->view('viewFlickrService');
	}

}
?>    