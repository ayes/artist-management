<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Picture extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/picture_model');
    }
    function index() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['content'] = 'admin/object/picture/picture_view';
        $data['get_picture'] = $this->picture_model->get_picture();
        $this->load->view('admin/template_view', $data);
    }
    function add() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['content'] = 'admin/object/picture/picture_add';
        $this->load->view('admin/template_view', $data);
    }
    function save() {
            $this->picture_model->save();
            $this->session->set_flashdata('message', 'Picture has been added..');
            redirect('admin/picture');
    }
    function edit() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['getEdit'] = $this->picture_model->editId();
        $data['content'] = 'admin/object/picture/picture_edit';
        $this->load->view('admin/template_view', $data);
    }
    function editFormId() {
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        //configure base path of ckeditor folder
        $this->ckeditor->basePath = base_url().'asset/ckeditor/';
        $this->ckeditor->config['toolbar'] = 'Full';
        $this->ckeditor->config['language'] = 'en';
        $this->ckeditor->config['width'] = 700;
        //configure ckfinder with ckeditor config
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../asset/ckfinder/');
        // content
        $data['getNews'] = $this->news_model->editFormId();
        $data['header'] = 'admin/includes/header_news';
        $data['content'] = 'admin/object/news/news_edit';
        $data['getNewsCategory'] = $this->news_model->getNewsCategory();
        $this->load->view('admin/template_admin_view', $data);
    }
    function update() {
         
            $this->picture_model->update();
            $this->session->set_flashdata('message', 'Picture has been update..');
            redirect('admin/picture');

    }
    function delete() {
            $this->picture_model->delete();
            $this->session->set_flashdata('message', 'Picture has been delete..');
            redirect('admin/picture');
    }

}

?>
