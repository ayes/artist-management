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
        }
        function user_logged_in() {
            $this->session->unset_userdata('landing_page');
            $this->session->set_userdata('landing_page', 'app/booking/add');
            if (($this->session->userdata('login') != TRUE) || ($this->session->userdata('panel') != 'ADMC'))
		{
			redirect('login');
		}
        }
	public function index()
	{
                $data['content'] = 'app/object/booking/booking_view';
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