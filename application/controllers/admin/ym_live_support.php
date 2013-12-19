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
class Ym_live_support extends CI_Controller 
    {
        function __construct() {
            parent::__construct();
            $this->load->model('admin/ym_live_support_model');
    }
    function index() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/ym_live_support/ym_live_support_view';
        $data['get_ym_live_support'] = $this->ym_live_support_model->get_ym_live_support();
        $this->load->view('admin/template_view', $data);
    }
     function add() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/ym_live_support/ym_live_support_add';
         $this->load->view('admin/template_view', $data);
    }
    function save() 
    {
        $this->ym_live_support_model->save();
        $this->session->set_flashdata('message', 'Ym live support has been added..');
        redirect('admin/ym_live_support');
    }
    function edit() {
        $data['getEdit'] = $this->ym_live_support_model->editId();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/ym_live_support/ym_live_support_edit';
         $this->load->view('admin/template_view', $data);
    }
    function editFormId() {
        $data['getEdit'] = $this->news_category_model->editFormId();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/news_category/news_category_edit';
        $this->load->view('admin/template_admin_view', $data);
    }
    function update() {
       
            $this->ym_live_support_model->update();
            $this->session->set_flashdata('message', 'YM live support has been update..');
            redirect('admin/ym_live_support');
 
    }
    function delete() {
            $this->ym_live_support_model->delete();
            $this->session->set_flashdata('message', 'YM live support has been delete..');
            redirect('admin/ym_live_support');
    }
}

?>
