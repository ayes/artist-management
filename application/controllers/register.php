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

class Register extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('register_model');
        }
	public function index()
	{
            $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/form_register.css' rel='stylesheet'>";
            $data['css2'] = "";
            $this->load->view('front/register_view', $data);
	}
        
        function save() {
             $config = array(
                        array('field' => 'email', 'label' => 'Email','rules' => 'required|callback_email_cek'),
                        array('field' => 'password', 'label' => 'Password', 'rules' => 'matches[repeat_password]'),
                        array('field' => 'repeat_password', 'label' => 'Ulangi Password', 'rules' => 'matches[password]'),
                        array('field' => 'name', 'label' => 'Nama','rules' => 'required'),
                        array('field' => 'mobile_phone', 'label' => 'No. Handphone','rules' => 'required'),
                        );
            $this->form_validation->set_rules($config);
		
		if($this->form_validation->run() === FALSE)
		{
			
                        $this->index();
		}
		else
		{
            $this->register_model->save();
            $this->session->set_flashdata('message', '<strong>Selamat!</strong> pendaftaran sukses, Anda dapat login sekarang!');
            redirect('login');
                }
        }
        function email_cek($email)
	{
		if($this->register_model->email_cek($email) === TRUE)
		{
			$this->form_validation->set_message('email_cek','<b>%s</b> sudah terdaftar.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */