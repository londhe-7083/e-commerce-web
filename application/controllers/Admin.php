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
        $data['cat_list']=$this->My_model->select_where("category",["status"=>"active"]);
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
        $data['cat_list']=$this->My_model->select_where("category",["status"=>"active"]);
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
    function add_product()
    {
        $this->navbar();
        $data['cat_list']=$this->My_model->select_where("category",["status"=>"active"]);
        $this->load->view("admin/add_product",$data);
        $this->footer();
    }
    function getSubCategoryByIdUsingAjax($category_id)
    {
        $cond = ["category_id"=>$category_id,'status'=>'active'];
        $data = $this->My_model->select_where("sub_category",$cond); 
        echo json_encode($data);
    }
    function save_product()
    {
        echo "<pre>";
        // print_r($_POST);
        // print_r($_FILES['product_image']);
        $fnames = [];
        for($i=0; $i<count($_FILES['product_image']['name']);$i++)
        {
            $file_name = time().rand(1111,9999).$_FILES['product_image']['name'][$i];
            $fnames[] = $file_name;
            // array_push($fnames,$file_name);
            move_uploaded_file($_FILES['product_image']['tmp_name'][$i],"uploads/".$file_name);
        }
        // print_r(implode("&&",$fnames));

        $_POST['product_image']=implode("&&",$fnames);
        $_POST['entry_date']=date('Y-m-d H:iA');
        $_POST['status']="active";
        $this->My_model->insert("product",$_POST);
        // print_r($_POST);
        redirect(base_url().'admin/add_product');
    }
    function product_list()
    {
        $this->navbar();
        $data['products']=$this->My_model->select_where("product",["status"=>"active"]);
        $this->load->view("admin/product_list");
        $this->footer();
    }
    function remove_category($cat_id)
    {
        $this->My_model->update("category",['category_id'=>$cat_id],["status"=>"deactive"]);
        redirect(base_url().'admin/category');
    }
    function manage_slider()
    {
        $this->navbar();
        // $data['products']=$this->My_model->slelect_where("product",["status"=>"active"]);
        $this->load->view("admin/manage_slider");
        $this->footer();
    }
    function save_slider(){
       $file_name = time().rand(1111,9999).$_FILES['slider_image']['name'];
       move_uploaded_file($_FILES['slider_image']['tmp_name'],"uploads/".$file_name);
       $_POST['slider_image'] = $file_name;
       $this->My_model->insert("slider",$_POST);
       redirect(base_url().'admin/manage_slider');
    }

    function pending_orders()
    {
        $this->navbar();
        $data['orders']=$this->My_model->getOrderDetails("pending");
        $this->load->view("admin/pending_orders",$data);
    }

    function dispatched_orders()
    {
        $this->navbar();
        $data['orders']=$this->My_model->getOrderDetails("dispatched");
        $this->load->view("admin/dispatched_order",$data);
    }

    function view_order_details($order_id)
    {
        $this->navbar();
			$data['order_det']=$this->My_model->select_where("order_tbl",["order_id"=>$order_id]);

			$data['order_products']=$this->My_model->select_where("order_details",["order_id"=>$order_id]);

			$this->load->view("admin/view_order_details",$data);
			$this->footer();
    }

    function dispatch_order($order_id){

        $data["order_status"]="dispatched";
        $data["dispatch_date"]=date('Y-m-d');

        $cond["order_id"]=$order_id;
        $this->My_model->update("order_tbl",$cond,$data);
        redirect(base_url()."admin/pending_orders");
    }
}
?>