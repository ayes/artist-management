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

class Profile extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->user_logged_in();
            $this->load->model('app/profile_model');
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
                $data['content'] = 'app/object/profile/profile_view';
                $data['getProfile'] = $this->profile_model->getProfile();
		$this->load->view('app/template_view', $data);
	}
        function add() {
        $data['content'] = 'app/object/booking/booking_add';
        $this->load->view('app/template_view', $data);
    }
        function update() {
            $this->profile_model->update();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully update profile!');
            redirect('app/profile');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */