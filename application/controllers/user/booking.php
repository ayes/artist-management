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
            $this->load->model('user/booking_model');
        }
        function user_logged_in() {
            if (($this->session->userdata('login') != TRUE) || ($this->session->userdata('panel') != 'USER'))
		{
			redirect('login');
		}
        }
	public function index()
	{
                $data['content'] = 'user/object/booking/booking_view';
                $data['getBooking'] = $this->booking_model->getBooking();
                $data['js1'] = "";
                $data['js2'] = "";
		$this->load->view('user/template_view', $data);
	}
        function add() {
        $data['content'] = 'user/object/booking/booking_add';
        $data['js1'] = "";
        $data['js2'] = "";
        $this->load->view('user/template_view', $data);
    }
        function save() {
            $this->booking_model->save();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully booking please wait for respond!');
            redirect('user/booking');
        }
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */