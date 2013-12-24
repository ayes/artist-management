<?php
/**
 * Description of adminpanel
 *
 * @author Irfan Mahfudz Guntur - ayes@bsmsite.com
 */

class Dashboard extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->user_logged_in();

    }

    function index() {

        $data['header'] = 'user/includes/header';

        $data['content'] = 'user/object/dashboard/dashboard_view';
        $data['js1'] = "";
        $data['js2'] = "";
        $this->load->view('user/template_view', $data);

    }

    function user_logged_in() {

            if (($this->session->userdata('login') != TRUE) || ($this->session->userdata('panel') != 'USER'))



		{

			redirect('/');

		}

        }

}



?>

