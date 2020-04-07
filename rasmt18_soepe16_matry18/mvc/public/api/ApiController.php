<?php

class ApiController extends Controller {
	
	public function index ($param) {

	}
	
	public function pictures () {
		$user_id = $this->model('Image')->getUserImages();
		print_r($user_id);
	}
	
}