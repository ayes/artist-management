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

class How_order extends CI_Controller {
        function __construct() {
            parent::__construct();
             $this->admin_logged_in();
            $this->load->model('admin/how_order_model');
        }
         function admin_logged_in() {
            if ($this->session->userdata('login') != TRUE || $this->session->userdata('status') != 'Admin')

		{
			redirect('admin-panel');
		}
        }
	public function index()
	{
                $data['content'] = 'admin/object/how_order/how_order_view';
                $data['get_how_order'] = $this->how_order_model->get_how_order();
		$this->load->view('admin/template_view', $data);
	}
        function add() {
        $data['content'] = 'app/object/booking/booking_add';
        $this->load->view('app/template_view', $data);
    }
        function update() {
            $this->how_order_model->update();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully update How to order!');
            redirect('admin/how_order');
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */