<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		echo "hello welcome in day";
	}
	
	public function about(){
		$this->load->view('admin/index');
		// echo "welcome about page";
	}
}


