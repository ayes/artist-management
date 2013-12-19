<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perencanaan_anggaran_apbn_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Profile_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_soft_profile() {
        $this->db->where('id', 1);
        return $this->db->get('tbsoft_profile');
    }
    
    function save() {
        $data = array(
            'tbuser_id' => $this->session->userdata('userid'),
            'event_date' => $this->input->post('event_date'),
            'event_location' => $this->input->post('event_location'),
            'event_type' => $this->input->post('event_type'),
            'approximate_budget' => $this->input->post('approximate_budget'),
            'event_comments' => $this->input->post('event_comments')
        );
        $this->db->insert('tbbook', $data);
    }
    
    function update() {
        $id = $this->input->post('id');
        $data = array(        
            'name' => $this->input->post('name'),
            'booking_description' => $this->input->post('booking_description')
        );
        $this->db->where('id', $id);
        $this->db->update('tbsoft_profile', $data);
    }
}

?>
