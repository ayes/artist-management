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

        $data['header'] = 'app/includes/header';

        $data['content'] = 'app/object/dashboard/dashboard_view';

        $this->load->view('app/template_view', $data);

    }

    function user_logged_in() {

            if (($this->session->userdata('login') != TRUE) || ($this->session->userdata('panel') != 'ADMC'))



		{

			redirect('/');

		}

        }

}



?>

