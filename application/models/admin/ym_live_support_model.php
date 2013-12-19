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
class Ym_live_support_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_ym_live_support() {
        $config['base_url'] = site_url('admin/ym_live_support/index');
	$config['total_rows'] = $this->db->count_all('tblive_support');
        $config['per_page'] = 15;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $this->db->order_by('ym_support', 'asc');
        $query = $this->db->get('tblive_support',$config['per_page'],$this->uri->segment(4));
        return $query;
    }
    function countProductCategory($id) {
            $this->db->where('product_category_id', $id);
            $this->db->from('tbproducts');
            return $this->db->count_all_results();
        }
    function save() {
        $data = array(
            'ym_support' => $this->input->post('ym_support')
        );
        $this->db->insert('tblive_support', $data);
    }
    function editId() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tblive_support');
    }
    function editFormId() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->get('tbnews_category');
    }
    function update() {
        $id = $this->input->post('id');
         $data = array(
            'ym_support' => $this->input->post('ym_support')
        );
        $this->db->where('id', $id);
        $this->db->update('tblive_support', $data);
    }
    function delete() {
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tblive_support');
    }
}

?>
