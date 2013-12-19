<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_category_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Tools_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_soft_name() 
    {
        $this->db->where('id', 1); 
        $q = $this->db->get('tbsoft_profile');
        foreach ($q->result() as $row) {
            return $row->name;
        }
    }
    function get_booking_description() 
    {
        $this->db->where('id', 1); 
        $q = $this->db->get('tbsoft_profile');
        foreach ($q->result() as $row) {
            return $row->booking_description;
        }
    }
        function getBanners() {
        
            return $this->db->get('tbbanners');
 
        }
   function getCountCategoryProduct($id) {
      $query = $this->db->query('select count(product_category_id) as cat from tbproducts where product_category_id ='.$id);
      foreach ($query->result() as $row) {
      return $row->cat;
      }
    }
     function getRandomProductsLimit() {
        $results = $this->db->order_by('id','random')->limit(20)->get('tbproducts')->result(); 
        return $results;   
    }
    function get_name_category($product_category_id) 
    {
        $this->db->where('id', $product_category_id); 
        $q = $this->db->get('tbproduct_category');
        foreach ($q->result() as $row) {
        return $row->category;
    }
    }
     function set_ym_widget() 
    {
        $this->db->where('widget', 'ym_widget'); 
        $q = $this->db->get('tbwidget_setting');
        foreach ($q->result() as $row) 
        {
            return $row->setting;
        }
    }
    function set_contact_widget() 
    {
        $this->db->where('widget', 'contact_widget'); 
        $q = $this->db->get('tbwidget_setting');
        foreach ($q->result() as $row) 
        {
            return $row->setting;
        }
    }
}

?>
