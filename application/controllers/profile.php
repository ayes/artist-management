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
            $this->load->model('profile_model');
        }
	public function index()
	{
            
            $this->load->view('front/profile_view');
	}
        
        function save() {
            $this->register_model->save();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> successfully register, you can sign in now!');
            redirect('login');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */