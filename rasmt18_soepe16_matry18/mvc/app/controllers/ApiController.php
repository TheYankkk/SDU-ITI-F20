<?php

class ApiController extends Controller {

	public function __construct () {
		hearder('Content-Type: application/json');
		//check brugernavn og password
		//or die();
	}
	
	public function index ($param) {

	}
	
	public function pictures () {
		$user_id = $this->model('Image')->getUserImages();
		print_r($user_id); //bruges kun til test
		echo json_encode($user_id, JSON_PRETTY_PRINT);

	}
	
}