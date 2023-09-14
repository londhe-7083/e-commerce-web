<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct()
    { 
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }

    function navbar()
    {
        $this->load->view('admin/navbar');
    }

    function footer()
    {
        $this->load->view('admin/footer');
    }

	public function index()
	{
		$this->navbar();
		$this->load->view('admin/index');
		$this->footer();
	}
	
	public function category(){
        $this->load->view('admin/navbar');
        $data['cat_list']=$this->My_model->select("category");
		$this->load->view('admin/category',$data);
		$this->load->view('admin/footer');	
    }

    function save_category(){
        $_POST['status']="active";
        $_POST['entry_date']=date('Y-m-d H:iA');
        $this->My_model->insert("category",$_POST);
        redirect(base_url().'admin/category');
    }

    function sub_category()
    {
        $this->navbar();
        $data["cat_list"]=$this->My_model->select("category");
        $data["sub_cat_list"]=$this->My_model->get_sub_category();
        $this->load->view("admin/sub_category",$data);
        // $this->footer();
    }

    function save_sub_category()
    {
        echo "<pre>";
        $_POST['status']="active";
        $_POST['entry_date']=date('Y-m-d H:iA');
        $this->My_model->insert("sub_category",$_POST);
        redirect(base_url().'admin/sub_category');
    }

    function edit_sub_category($sub_category_id)
    {
        // print_r($_POST);
        $cond = ["sub_category_id"=>$sub_category_id];
        $data['sub_cat_info'] = $this->My_model->select_where("sub_category",$cond);
        $data['cat_list']=$this->My_model->select("category");
        $this->navbar();
        $this->load->view("admin/edit_sub_category", $data);
        $this->footer();
    }
    function update_sub_category($sub_category_id)
    {
        $cond = ["sub_category_id"=>$sub_category_id];
        $this->My_model->update("sub_category",$cond,$_POST);
        redirect(base_url().'admin/sub_category');
    }
}
?>


