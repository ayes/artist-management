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
class Booking_model extends CI_Model {
    function __construct() {
        parent::__construct();
        $this->load->helper('mydate');
        $this->load->library('email');
    }
    function getBooking() {
        $this->db->order_by('id', 'asc');
        return $this->db->get('tbbook');
    }
    function save() {
        $data = array(
            'user_id' => $this->session->userdata('userid'),
            'event_date' => con2mysql($this->input->post('event_date')),
            'event_location' => $this->input->post('event_location'),
            'event_type' => $this->input->post('event_type'),
            'approximate_budget' => $this->input->post('approximate_budget'),
            'event_comments' => $this->input->post('event_comments'),
            'status' => 'PENDING'
        );
        $this->db->insert('tbbook', $data);
        $insert = $this->db->insert_id();
        $sub = 'Booking Notification - '.$insert;
        $msg = 'Booking Code - '.$insert.' - dont reply this email';
       
        $this->email->from('notif@ratudewi.com', 'RatuDewi.com');
$this->email->to('ratu@ratudewi.com');  
$this->email->subject($sub);
$this->email->message($msg);	
$this->email->send();
    }
}

?>
