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
		$data['trending_products'] = $this->My_model->select_where("product",["status"=>"active","product_label"=>"Trending"]);
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
			if(isset($_SESSION['user_id']))
				{
					$this->navbar();
					$data['cart_info'] = $this->My_model->cartDeatails();
					$this->load->view("user/cart",$data);
					$this->footer();
				}

			else
			{
				redirect(base_url().'user/login');
			}

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
	
	function removeFromCartMultiple()
		{
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
}

?>

