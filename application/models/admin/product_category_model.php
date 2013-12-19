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
class Product_category_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function getProductCategory() {
        $config['base_url'] = site_url('admin/product_category/index');
	$config['total_rows'] = $this->db->count_all('tbproduct_category');
        $config['per_page'] = 15;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $this->db->order_by('category', 'asc');
        $query = $this->db->get('tbproduct_category',$config['per_page'],$this->uri->segment(4));
        return $query;
    }
    function countProductCategory($id) {
            $this->db->where('product_category_id', $id);
            $this->db->from('tbproducts');
            return $this->db->count_all_results();
        }
    function save() {
        $data = array(
            'category' => $this->input->post('category')
        );
        $this->db->insert('tbproduct_category', $data);
    }
    function editId() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbproduct_category');
    }
    function editFormId() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->get('tbnews_category');
    }
    function update() {
        $id = $this->input->post('id');
         $data = array(
            'category' => $this->input->post('category')
        );
        $this->db->where('id', $id);
        $this->db->update('tbproduct_category', $data);
    }
    function delete() {
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tbproduct_category');
    }
}

?>
