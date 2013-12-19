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
class Products extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/products_model');
    }
    function index() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_view';
        $data['getProducts'] = $this->products_model->getProducts();
        $this->load->view('admin/template_view', $data);
    }
    function add() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_add';
        $data['getProductCategory'] = $this->products_model->getProductCategory();
        $this->load->view('admin/template_view', $data);
    }
    function save() {
         
          
            $this->products_model->save();
            $this->session->set_flashdata('message', 'Product has been added..');
            redirect('admin/products');
 
    }
    function edit() {
        $data['getEdit'] = $this->products_model->editId();
        $data['getProductCategory'] = $this->products_model->getProductCategory();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_edit';
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
         
            $this->products_model->update();
            $this->session->set_flashdata('message', 'Product has been update..');
            redirect('admin/products');

    }
    function delete() {
            $this->products_model->delete();
            $this->session->set_flashdata('message', 'Product has been delete..');
            redirect('admin/products');
    }
    function search() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/products/products_view';
        $data['getProducts'] = $this->products_model->getSearchProduct();
        $this->load->view('admin/template_view', $data);
    }
}

?>
