<?php

class User extends CI_Controller {

	
	 function navbar()
	 {
		$data["cat_list"]=$this->My_model->select_where("category",["status"=>"active"]);
		foreach($data["cat_list"] as $key => $row)
		{
			$data["cat_list"][$key]["sub_cat_list"]=$this->My_model->select_where("sub_category",["category_id"=>$row['category_id']]);
		}
		// echo "<pre>";
		// print_r($data['cat_list']);
        $this->load->view("user/navbar",$data);
	}

    function footer()
	{
        $this->load->view("user/footer");
    }
	public function index()
	{
		$this->navbar();
		$data['slider'] = $this->My_model->select("slider");
		$data['trending_products'] = $this->My_model->select_where2("product",["status"=>"active","product_label"=>"Trending"]);
		$data['Featured'] = $this->My_model->select_where2("product",["status"=>"active","product_label"=>"Featured"]);
		$data['Upto20OFF'] = $this->My_model->select_where2("product",["status"=>"active","product_label"=>"Upto 20% OFF"]);
		$data['Upto10OFF'] = $this->My_model->select_where2("product",["status"=>"active","product_label"=>"Upto 10% OFF"]);
		$data['Upto30OFF'] = $this->My_model->select_where2("product",["status"=>"active","product_label"=>"Upto 30% OFF"]);
        $this->load->view("user/index",$data);
		$this->footer();
	}
	function product_information($product_id)
	{
		$this->navbar();
		$data['product_info']=$this->My_model->select_where("product",["product_id"=>$product_id]);

		if(isset($_SESSION['user_id']))
		{ 
			$cond = ["product_id"=>$product_id, "user_id"=>$_SESSION['user_id']];
			 $data['cart'] = $this->My_model->select_where("user_cart",$cond);
		}
		else{
			$data['cart']=[];
		}
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
	public function registration_process()
	{
		$this->My_model->insert("users",$_POST);
		$_SESSION['message']="Account Created Succesfully";
		redirect(base_url().'user/login');
	}
	public function login_process()
	{
	if($_POST['user_email'] && $_POST['user_password'])
		{
			$cond = ["user_email"=>$_POST['user_email'],"user_password"=>$_POST['user_password']];
			$data = $this->My_model->select_where("users",$cond);
			if(count($data)>0)
			{	
				$_SESSION['user_id'] = $data[0]['user_id'];
				$_SESSION['message']="Welcome ".$data[0]['user_name']." Login Success";
				redirect(base_url().'user/index');
			}
			else{
				$_SESSION['error_message']="Login Failed,Invalid Deatails";
				redirect(base_url().'user/login');
			}
		} 
	}
	function add_to_cart($product_id)
	{
		if(isset($_SESSION['user_id'])) 
		{ 
		$data = ["product_id"=>$product_id,"user_id"=>$_SESSION['user_id'],"qty"=>1];
		$cond = ["product_id"=>$product_id,"user_id"=>$_SESSION['user_id']];

		$result = $this->My_model->select_where("user_cart",$cond);
		if(count($result) == 0)
		$this->My_model->insert("user_cart",$data);
	    $_SESSION['message']="Your Product Successfully Added In Cart";
		redirect(base_url()."user/product_information/".$product_id);
		}
		else{
			$_SESSION['error_message']="You Must Have To Login First";
			redirect(base_url()."user/login/");
		}
	}

	function increaseCartQty($product_id)
		{
			if(isset($_SESSION['user_id']))
			{ 
				$cond = ["product_id"=>$product_id,"user_id"=>$_SESSION['user_id']];
				$data = $this->My_model->select_where("user_cart",$cond);
				$newqty = $data[0]['qty']+1;
				$data = $this->My_model->update("user_cart",$cond,['qty'=>$newqty]);
				echo json_encode($newqty);
		    }
			else{
				echo json_encode(['status'=>'failed',"msg"=>"Invalid Login"]);
				}

		}
	function decreaseCartQty($product_id)
		{
			if(isset($_SESSION['user_id']))
			{ 
				$cond = ["product_id"=>$product_id,"user_id"=>$_SESSION['user_id']];
				$data = $this->My_model->select_where("user_cart",$cond);
				$newqty = $data[0]['qty']-1;
				if($newqty >= 1)
				{
					$data = $this->My_model->update("user_cart",$cond,['qty'=>$newqty]);
					echo json_encode($newqty);
				}
				else
				{
					echo json_encode(1);
				}
				
		    }
			else{
				echo json_encode(['status'=>'failed',"msg"=>"Invalid Login"]);
				}
		}

	function cart()
		{

			// if(isset($_SESSION['user_id']))
			// 	{
			// 		$this->navbar();
			// 		$data['trending_products'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Trending"]);
			// 		$this->footer();
			// 	}

			// else
			// {
			// 	redirect(base_url().'user/login');
			// }
			$this->navbar();
			$data['cart_info'] = $this->My_model->cartDeatails();
			// print_r($data);
			$this->load->view("user/cart",$data);
			$this->footer();


		}

	function removeFromCart($product_id)
		{
			if(isset($_SESSION['user_id']))
				{ 
					$cond = ["user_id"=>$_SESSION['user_id'],"product_id"=>$product_id];
					$this->My_model->delete("user_cart",$cond);
					redirect(base_url().'user/cart');
				}
		}
	
	function removeFromCartMultiple(){
			if(isset($_POST['product_id']))
			{
				for($i=0;$i<count($_POST['product_id']);$i++)
				 {
					$cond = ["user_id"=>$_SESSION['user_id'],"product_id"=>$_POST['product_id'][$i]];
					$this->My_model->delete("user_cart",$cond);
				 }
				 redirect(base_url().'user/cart');
			}
			else
			{
				redirect(base_url().'user/cart');
			}
			
	}
		public function confirm_address()
		{
			$this->navbar();
			$this->load->view("user/confirm_address");
			$this->footer();
		}

		public function place_order()
		{
			echo "<pre>";
			$cart_info = $this->My_model->cartDeatails();
			$ttl = 0;
			foreach($cart_info as $row)
			{
				$ttl += ($row['product_price']*$row['qty']);
			}
			$_POST['user_id']=$_SESSION['user_id'];
			$_POST['total_amount']=$ttl;
			$_POST['order_date']=date('Y-m-d');
			$_POST['order_status']="pending";
			$_POST['status']="active";
			// $sql = "CREATE TABLE order_tbl(order_id INT PRIMARY KEY AUTO_INCREMENT, deliver_to VARCHAR(200), state VARCHAR(50), district VARCHAR(50),city VARCHAR(50), area VARCHAR(200), pincode VARCHAR(7), total_amount INT, order_date DATE, order_status VARCHAR(20), status VARCHAR(20))";
			$order_id = $this->My_model->insert("order_tbl",$_POST);
			
			foreach($cart_info as $row)
			{
				$product['order_id'] = $order_id;
				$product['user_id']=$_SESSION['user_id'];
				$product['product_id'] = $row['product_id'];
				$product['product_name'] = $row['product_name'];
				$product['product_price'] = $row['product_price'];
				$product['qty'] = $row['qty'];
				$product['product_label'] = $row['product_label'];
				$product['product_deatails'] = $row['product_deatails'];
				$product['product_image'] = $row['product_image'];
				$product['status'] = 'active';

				// $sql = "CREATE TABLE order_details (order_det_id INT PRIMARY KEY AUTO_INCREMENT, order_id INT, user_id INT, product_id INT, product_name TEXT, product_price INT, qty INT, product_label VARCHAR(200), product_deatails TEXT, product_image TEXT, status VARCHAR(200))";
				$this->db->insert("order_details",$product);
			}
			$this->My_model->delete("user_cart", ["user_id"=>$_SESSION['user_id']]);
			redirect(base_url().'user/my_orders');
		}		
		function my_orders()
		{
			$this->navbar();
			$data['orders']=array_reverse($this->My_model->select_where("order_tbl",["user_id"=>$_SESSION['user_id'],'status'=>'active']));
			$this->load->view("user/My_orders",$data);
			$this->footer();
		}
		
		function open_invoice($order_id)
		{
			$this->navbar();
			$data['order_det']=$this->My_model->select_where("order_tbl",["order_id"=>$order_id]);

			$data['order_products']=$this->My_model->select_where("order_details",["order_id"=>$order_id]);

			$this->load->view("user/open_invoice",$data);
			$this->footer();
		}

    
function all_product()
	{
		$this->navbar();
		$data['trending_products'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Trending"]);
		$data['Featured'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Featured"]);
		$data['Upto20OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 20% OFF"]);
		$data['Upto10OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 10% OFF"]);
		$data['Upto30OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 30% OFF"]);
		$this->load->view("user/all_product",$data);
		$this->footer();
	}

function show_product(){

	$this->navbar();
	$data['trending_products'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Trending"]);
	$this->load->view("user/shoes",$data);
	$this->footer();
}

function mobiles(){

	$this->navbar();
	$data['Upto20OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 20% OFF"]);
	$this->load->view("user/mobiles",$data);
	$this->footer();
}

function womens(){
	$this->navbar();
	$data['Featured'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Featured"]);
	$this->load->view("user/womens",$data);
	$this->footer();
}

function s_watch(){
	$this->navbar();
	$data['Upto10OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 10% OFF"]);
	$this->load->view("user/s_watch",$data);
	$this->footer();
}

function s_tv(){
	$this->navbar();
	$data['Upto30OFF'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Upto 30% OFF"]);
	$this->load->view("user/s_tv",$data);
	$this->footer();
}
	}

?>

