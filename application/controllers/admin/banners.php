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

class Banners extends CI_Controller {
        function __construct() {
            parent::__construct();
             $this->admin_logged_in();
            $this->load->model('admin/banners_model');
        }
         function admin_logged_in() {
            if ($this->session->userdata('login') != TRUE || $this->session->userdata('status') != 'Admin')

		{
			redirect('admin-panel');
		}
        }
	public function index()
	{
                $data['content'] = 'admin/object/banners/banners_view';
                $data['getBanners'] = $this->banners_model->getBanners();
		$this->load->view('admin/template_view', $data);
	}
         function edit() {
        $data['getEdit'] = $this->banners_model->editId();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/banners/banners_edit';
        $this->load->view('admin/template_view', $data);
        }
        function update() {
         
            $this->banners_model->update();
            $this->session->set_flashdata('message', 'Banner has been update..');
            redirect('admin/banners');

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */