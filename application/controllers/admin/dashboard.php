<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author ayes
 */
class Dashboard extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->admin_logged_in();
    }
    function index() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/dashboard/dashboard_view';
        $this->load->view('admin/template_view', $data);
    }
    function admin_logged_in() {
            if ($this->session->userdata('login') != TRUE || $this->session->userdata('status') != 'Admin')

		{
			redirect('admin-panel');
		}
        }
}

?>
