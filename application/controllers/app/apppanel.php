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
class Apppanel extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('app/login_app_model');
    }
    function index() {
        if ($this->session->userdata('login') == TRUE && $this->session->userdata('status') == 'User')
		{
			redirect('app/dashboard');
		}
		else
		{
			 $this->load->view('front/template_view');
		}
       
    }
    function proses() {
        if ($this->session->userdata('login') == TRUE && $this->session->userdata('status') == 'User')
		{
			redirect('app/dashboard');
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
			
			if($this->login_app_model->proses($user,$pass) == TRUE)
			{
				
				$q = $this->login_app_model->get_nama($user,$pass);
				$r = $q->row();
				$name = $r->name;
                                $userid = $r->id;
				
				$data = array('username' => $user, 'name' => $name, 'userid' => $userid, 'login' => TRUE, 'status' => 'User');				
				$this->session->set_userdata($data);
				//$this->site_model->changeSessionId();
				redirect('app/dashboard');

			}
			else
			{
				$data['error'] = '<span class=error>Username atau password salah !</span>';
                                $this->load->view('front/template_view', $data);
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
