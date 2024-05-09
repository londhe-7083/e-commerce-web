<?php

class Welcome extends CI_Controller {

	
	 function navbar(){
		$this->load->view("user/navbar");
	}

	public function index()
	{
		$this->navbar();
	}
}


