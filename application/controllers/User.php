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
		$data['trending_products'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Trending"]);
        $this->load->view("user/index",$data);
		$this->footer();
	}
	function product_information($product_id)
	{
		$this->navbar();
		$data['product_info']=$this->My_model->select_where("product",["product_id"=>$product_id]);
		$this->load->view("user/product_inforamtion",$data);
		$this->footer();
	}
	function login()
	{
		$this->navbar();
		$this->load->view("user/login");
		$this->footer();
	}
	public function register()
	{
		$this->navbar();
		$this->load->view("user/register");
		$this->footer();
	}
}


