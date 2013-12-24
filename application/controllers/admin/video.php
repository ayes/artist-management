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
class Video extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/video_model');
    }
    function index() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['content'] = 'admin/object/video/video_view';
        $data['get_video'] = $this->video_model->get_video();
        $this->load->view('admin/template_view', $data);
    }
    function add() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['content'] = 'admin/object/video/video_add';
        $this->load->view('admin/template_view', $data);
    }
    function save() {
            $this->video_model->save();
            $this->session->set_flashdata('message', 'Video has been added..');
            redirect('admin/video');
    }
    function edit() {
        $data['js1'] = "";
        $data['js2'] = "";
        $data['getEdit'] = $this->video_model->editId();
        $data['content'] = 'admin/object/video/video_edit';
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
         
            $this->video_model->update();
            $this->session->set_flashdata('message', 'Video has been update..');
            redirect('admin/video');

    }
    function delete() {
            $this->video_model->delete();
            $this->session->set_flashdata('message', 'Video has been delete..');
            redirect('admin/video');
    }

}

?>
