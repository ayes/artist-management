<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Video_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function get_video() {
        $config['base_url'] = site_url('admin/video/index');
	$config['total_rows'] = $this->db->count_all('tbvideo');
        $config['per_page'] = 100;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('tbvideo',$config['per_page'],$this->uri->segment(4));
        return $query;
    }

    
    function save() {
        $data = array(
            'youtube_id' => $this->input->post('youtube_id')
        );
            $this->db->insert('tbvideo',$data);
             
    }

    function editId() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbvideo');
    }
     //
    function editFormId() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->get('tbnews');
    }
    function update() {
             
        $id = $this->input->post('id');
        $data = array(
            'youtube_id' => $this->input->post('youtube_id')
        );
        $this->db->where('id', $id);
        $this->db->update('tbvideo', $data);
    }
    
    function delete() {
       
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tbvideo');
        
    }
   
}

?>
