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

class Login extends CI_Controller {
        function __construct() {
            parent::__construct();
        }
	public function index()
	{
        $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/signin1.css' rel='stylesheet'>";
        $data['css2'] = "";
		$this->load->view('front/login_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */