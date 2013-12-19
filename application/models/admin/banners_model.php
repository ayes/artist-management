<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perencanaan_anggaran_apbn_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Banners_model extends CI_Model {
    var $banners_path;
    function __construct() {
        parent::__construct();
        $this->banners_path = realpath(APPPATH . '../fx-archive/images_banner');
    }
    function getBanners() {
        return $this->db->get('tbbanners');
    }
    function editId() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbbanners');
    }
   function update() {
             
        $id = $this->input->post('id');
        $banner = $this->input->post('banner');
          $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->banners_path,
                'max_size' => 2000,
                'file_name' => random_string('alnum', 30)
            );
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
            $image_data = $this->upload->data();
            $image_file = $image_data['file_name'];
            $image_ext = $image_data['file_ext'];
           $config = array(
                'source_image' => $image_data['full_path'],
                'new_image' => $this->banners_path . '/thumbs',
                'maintain_ratio' => true,
                'width' => '1344px',
                'height' => '500px'
            );
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
 
        
               
             if ($image_ext != '') {
                $data['banner'] = $image_file;
                unlink($this->banners_path.'/thumbs/'.$banner);
                unlink($this->banners_path.'/'.$image_file);
            }
        $this->db->where('id', $id);
        $this->db->update('tbbanners', $data);
    }
}

?>
