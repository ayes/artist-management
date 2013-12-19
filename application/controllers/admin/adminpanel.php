<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of adminpanel
 *
 * @author ayes
 */
class Adminpanel extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/login_admin_model');
    }
    function index() {
        if ($this->session->userdata('login') == TRUE && $this->session->userdata('status') == 'Admin')
		{
			redirect('admin/dashboard');
		}
		else
		{
			 $this->load->view('admin/login_view');
		}
       
    }
    function proses() {
        if ($this->session->userdata('login') == TRUE && $this->session->userdata('status') == 'Admin')
		{
			redirect('admin/dashboard');
		}
		else
		{
			
		
        //validasi form
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class=error>','</span>');
		
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}
		else
		{
			$user 	= $this->input->post('username');
			$passx 	= $this->input->post('password');
			$pass	= md5($passx);
			
			if($this->login_admin_model->proses($user,$pass) == TRUE)
			{
				
				$q = $this->login_admin_model->get_nama($user,$pass);
				$r = $q->row();
				$name = $r->name;
                                $userid = $r->id;
				
				$data = array('username' => $user, 'name' => $name, 'adminid' => $userid, 'login' => TRUE, 'status' => 'Admin');				
				$this->session->set_userdata($data);
				//$this->site_model->changeSessionId();
				redirect('admin/dashboard');

			}
			else
			{
				$data['error'] = '<span class=error>Username atau password salah !</span>';
                                $this->load->view('admin/template_login_view', $data);
			}
		}
                }
    }
    function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}

?>
