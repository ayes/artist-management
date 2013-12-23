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

class Picture extends CI_Controller {
        function __construct() {
            parent::__construct();
            $this->load->model('picture_model');
        }
	public function index()
	{
            $data['css1'] = "<link href='http://tools.bsmsite.com/template/global/css/jumbotron.css' rel='stylesheet'>";
        $data['css2'] = "<link href='http://tools.bsmsite.com/template/artist_management/css/picture.css' rel='stylesheet'>";
        $data['css3'] = "<link href='http://tools.bsmsite.com/template/prettyphoto/css/prettyPhoto.css' rel='stylesheet'>";
        $data['js1'] = "<script src='http://tools.bsmsite.com/template/prettyphoto/js/jquery.prettyPhoto.js'></script>";
        $data['js2'] = "<script src='http://tools.bsmsite.com/template/prettyphoto/js/prettyphoto.init.js'></script>";
        $data['get_picture'] = $this->picture_model->get_picture();
        $this->load->view('front/picture_view', $data);
	}
        
        function save() {
            $this->register_model->save();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> successfully register, you can sign in now!');
            redirect('login');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */