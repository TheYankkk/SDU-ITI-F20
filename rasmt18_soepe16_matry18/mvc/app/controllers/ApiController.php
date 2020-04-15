<?php

class ApiController extends Controller {

	public function __construct () {
		header('Content-Type: application/json');
		//check brugernavn og password
		//or die();
	}
	
	public function index ($param) {


    }

    public function pictures($user, $user_Id) { //hvad skal $user_Id bruges til?

        $user_pictures = $this->model('Image')->getUserImages($user_Id);
        //print_r($user_pictures);
        echo json_encode($user_pictures, JSON_PRETTY_PRINT);
    }

}