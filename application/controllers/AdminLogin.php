<?php
class AdminLogin extends CI_Controller
 {	
	
	public function index()
	{
		$this->load->view("adminlogin");
	}

	function process()
	{
		if(isset($_POST["admin_email"]) && isset($_POST["admin_password"]))
		{
			$cond = ["admin_email"=>$_POST["admin_email"],"admin_password"=>$_POST["admin_password"]];
			$data = $this->My_model->select_where("admin",$cond);
			if(count($data)>0)
			{
				$cond = ["admin_email"=>$_POST["admin_email"],"admin_password"=>$_POST["admin_password"]];
				$data = $this->My_model->select_where("admin",$cond);
				if(count($data)>0)
				{
					$_SESSION['admin_id']=$data[0]['admin_id'];
					redirect(base_url()."admin");
				}
				else{
					$_SESSION['error']="Invalid Details";
					redirect(base_url()."adminlogin/index");
				}
			}

			else{
				$_SESSION['error']="Invalid Details";
				redirect(base_url()."adminlogin/index");
			}
		}
	}
}
?>


