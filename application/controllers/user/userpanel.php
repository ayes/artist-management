<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of adminpanel
 * ARTIST MANAGEMENT SYSTEM
 * @author Irfan Mahfudz Guntur - ayes@bsmsite.com
 */

class Userpanel extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('user/login_user_model');
    }
    function index() {
        if (($this->session->userdata('login') == TRUE) && ($this->session->userdata('panel') == 'USER'))
		{
			redirect('user/dashboard');
		}
		else
		{
                    $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/signin1.css' rel='stylesheet'>";
        $data['css2'] = "";
        $data['css3'] = "";
        $data['js1'] = "";
        $data['js2'] = "";
                    $this->load->view('front/login_view');
		}
    }
    function proses() {
        if (($this->session->userdata('login') == TRUE) && ($this->session->userdata('panel') == 'USER'))
		{
			redirect('user/dashboard');
		}
		else
		{
        //validasi form
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<span class=error>','</span>');
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}
		else
		{
			$email	= $this->input->post('email');
			$passx 	= $this->input->post('password');
			$pass	= md5($passx);
			if($this->login_user_model->proses($email,$pass) == TRUE)
			{
				$q = $this->login_user_model->get_nama($email,$pass);
				$r = $q->row();
				$name = $r->name;
                                $userid = $r->id;
				$data = array('email' => $email, 'name' => $name, 'userid' => $userid, 'login' => TRUE, 'panel' => 'USER');				
				$this->session->set_userdata($data);
				redirect('user/booking/add');
			}
			else
			{
				$data['error'] = '<span class=error>Username atau password salah !</span>';
                                $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/signin1.css' rel='stylesheet'>";
        $data['css2'] = "";
        $data['css3'] = "";
        $data['js1'] = "";
        $data['js2'] = "";
                                $this->load->view('front/login_view', $data);
			}
		}
                }
    }
    function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
?>

