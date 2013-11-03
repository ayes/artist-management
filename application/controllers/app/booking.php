<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of adminpanel
 *
 * @author Irfan Mahfudz Guntur - ayes@bsmsite.com
 */

class Booking extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->user_logged_in();
            $this->load->model('app/booking_model');
        }
        function user_logged_in() {
            if (($this->session->userdata('login') != TRUE) || ($this->session->userdata('panel') != 'ADMC'))
		{
			redirect('login');
		}
        }
	public function index()
	{
                $data['content'] = 'app/object/booking/booking_view';
                $data['getBooking'] = $this->booking_model->getBooking();
		$this->load->view('app/template_view', $data);
	}
        function add() {
        $data['content'] = 'app/object/booking/booking_add';
        $this->load->view('app/template_view', $data);
    }
        function save() {
            $this->booking_model->save();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully booking please wait for respond!');
            redirect('app/booking');
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */