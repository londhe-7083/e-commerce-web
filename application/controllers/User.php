<?php
 
 class User extends CI_Controller
 {

    // private function nav()
    // {
    //     $this->load->view("user/navbar");
    // }


    function index(){

    // $this -> nav();
    $student = ["student_name"=>"ABCD","student_mobile"=>"9960358229"];

    $data = ["student"=>$student];
    $this ->load->view("user/index",$data);
    $this -> load -> view("user/index");
    // $this -> load -> view("user/navbar");
        }
        
    function inde()
            {
                // $this->load->view("admin_index");
                echo "hello";
                echo "hello ji viwer here";

            }

    function viewer()
            {
                echo "hello ji viwer2   here";
            }
 }
 ?>