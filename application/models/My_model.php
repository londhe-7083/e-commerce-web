<?php

  class My_model extends CI_model
    {
      function insert($tname,$data)
      {
        $this->db->insert($tname,$data);
        return $this->db->insert_id();
      }
      function select($tname)
      {
       return $this->db->get($tname)->result_array();
      }
      function get_sub_category()
      {
        return $this->db->query("SELECT * FROM sub_category,category WHERE sub_category.category_id = category.category_id")->result_array();
      }
      function select_where($tname,$cond)
      {
        return $this->db->where($cond)->get($tname)->result_array();
      }
      function update($tname,$cond,$data)
      {
          $this->db->where($cond)->update($tname,$data);
      }
      function cartDeatails()
      {
        $user_id = $_SESSION['user_id'];
       return $this->db->query("SELECT * FROM user_cart,product WHERE user_cart.product_id =  product.product_id AND user_id = '$user_id'")->result_array();
      }
      function delete($tname,$cond)
      {
        $this->db->where($cond)->delete($tname);
      }
    }
?>