<?php

class User extends CI_Controller {

	
	 function navbar(){
		$data["cat_list"]=$this->My_model->select_where("category",["status"=>"active"]);
		foreach($data["cat_list"] as $key => $row)
		{
			$data["cat_list"][$key]["sub_cat_list"]=$this->My_model->select_where("sub_category",["category_id"=>$row['category_id']]);
		}
		// echo "<pre>";
		// print_r($data['cat_list']);
        $this->load->view("user/navbar",$data);
	}

    function footer(){
        $this->load->view("user/footer");
    }
	public function index()
	{
		$this->navbar();
		$data['slider'] = $this->My_model->select("slider");
        $this->load->view("user/index",$data);
		$this->footer();
	}
}


