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
             $this->admin_logged_in();
            $this->load->model('admin/profile_model');
        }
         function admin_logged_in() {
            if ($this->session->userdata('login') != TRUE || $this->session->userdata('status') != 'Admin')

		{
			redirect('admin-panel');
		}
        }
	public function index()
	{
                $data['content'] = 'admin/object/profile/profile_view';
                $data['get_soft_profile'] = $this->profile_model->get_soft_profile();
		$this->load->view('admin/template_view', $data);
	}
        function add() {
        $data['content'] = 'app/object/booking/booking_add';
        $this->load->view('app/template_view', $data);
    }
        function update() {
            $this->profile_model->update();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully update profile!');
            redirect('admin/profile');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */