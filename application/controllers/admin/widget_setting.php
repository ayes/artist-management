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
class Widget_setting extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/widget_setting_model');
    }
    function ym() {
        $this->widget_setting_model->update_ym();
            $this->session->set_flashdata('message', 'YM Live Support has been apply..');
            redirect('admin/ym_live_support');
    }
    function contact() {
        $this->widget_setting_model->update_contact();
            $this->session->set_flashdata('message', 'Widget contact has been apply..');
            redirect('admin/widget_contact');
    }
    
}

?>
