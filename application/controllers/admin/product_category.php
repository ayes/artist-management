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
class Product_category extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('admin/product_category_model');
    }
    function index() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/product_category/product_category_view';
        $data['getProductCategory'] = $this->product_category_model->getProductCategory();
        $this->load->view('admin/template_view', $data);
    }
     function add() {
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/product_category/product_category_add';
         $this->load->view('admin/template_view', $data);
    }
    function save() {
        $config = array(
            array('field' => 'category', 'label' => 'Nama Kategori','rules' => 'required'),
        ); 	
        $this->form_validation->set_rules($config); 
        if($this->form_validation->run() == false)
        {
            $this->add();
        }
        else {    
            $this->product_category_model->save();
            $this->session->set_flashdata('message', 'Category has been added..');
            redirect('admin/product_category');
        } 
    }
    function edit() {
        $data['getEdit'] = $this->product_category_model->editId();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/product_category/product_category_edit';
         $this->load->view('admin/template_view', $data);
    }
    function editFormId() {
        $data['getEdit'] = $this->news_category_model->editFormId();
        $data['header'] = 'admin/includes/header';
        $data['content'] = 'admin/object/news_category/news_category_edit';
        $this->load->view('admin/template_admin_view', $data);
    }
    function update() {
       
            $this->product_category_model->update();
            $this->session->set_flashdata('message', 'Category has been update..');
            redirect('admin/product_category');
 
    }
    function delete() {
            $this->product_category_model->delete();
            $this->session->set_flashdata('message', 'Category has been delete..');
            redirect('admin/product_category');
    }
}

?>
