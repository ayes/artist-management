<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_category
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Setting extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/setting_model');
    }
    function index() {
       $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/setting/setting_view';
        $data['get_setting'] = $this->setting_model->get_setting();
        $this->load->view('admin/template_view', $data);
    }
    function update() {
            $this->setting_model->update();
            $this->session->set_flashdata('message', '<strong>Well done!</strong> You successfully update setting!');
            redirect('admin/setting');
        }
    
}

?>
