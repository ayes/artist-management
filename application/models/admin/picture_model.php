<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Picture_model extends CI_Model {
    var $picture_path;
    function __construct() {
        parent::__construct();
        $this->picture_path = realpath(APPPATH . '../fx-archive/images_picture');
    }
    function get_picture() {
        $config['base_url'] = site_url('admin/picture/index');
	$config['total_rows'] = $this->db->count_all('tbpicture');
        $config['per_page'] = 100;
        $config['uri_segment'] = 4;
        $this->pagination->initialize($config);
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('tbpicture',$config['per_page'],$this->uri->segment(4));
        return $query;
    }

    
    function save() {
        $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->picture_path,
                'max_size' => 2000,
                'file_name' => random_string('alnum', 32)
            );
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
            $image_data = $this->upload->data();
            $image_file = $image_data['file_name'];
            $image_ext = $image_data['file_ext'];
             $this->load->library('image_lib');
           
            $config2 = array(
                'source_image' => $image_data['full_path'] ,
                'new_image' => $this->picture_path . '/thumbs',
                'maintain_ratio' => true,
                'master_dim' => 'auto',
                'width' => '500',
                'height' => '750'
            );
            $this->image_lib->initialize($config2);
            $this->image_lib->resize();
            $this->image_lib->clear();
             if ($image_ext == '') {
                 $data['picture'] = 'kosong.gif';
             } else {
                $data['picture'] = $image_file;
                unlink($this->picture_path.'/'.$image_file);
            }
            $this->db->insert('tbpicture',$data);
             
    }

    function editId() {
        $this->db->where('id', $this->uri->segment(4));
        return $this->db->get('tbpicture');
    }
     //
    function editFormId() {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        return $this->db->get('tbnews');
    }
    function update() {
             
        $id = $this->input->post('id');
        $picture = $this->input->post('picture');
          $config = array(
                'allowed_types' => 'jpg|jpeg|gif|png',
                'upload_path' => $this->picture_path,
                'max_size' => 2000,
                'file_name' => random_string('alnum', 32)
            );
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
            $image_data = $this->upload->data();
            $image_file = $image_data['file_name'];
            $image_ext = $image_data['file_ext'];
          $this->load->library('image_lib');
           
            $config2 = array(
                'source_image' => $image_data['full_path'] ,
                'new_image' => $this->picture_path . '/thumbs',
                'maintain_ratio' => true,
                'master_dim' => 'auto',
                'width' => '182',
                'height' => '273'
            );
            $this->image_lib->initialize($config2);
            $this->image_lib->resize();
            $this->image_lib->clear();
             if ($image_ext != '') {
                $data['picture'] = $image_file;
                if ($picture != 'kosong.gif') {
                unlink($this->picture_path.'/thumbs/'.$picture);
                }
                unlink($this->picture_path.'/'.$image_file);
            }
        $this->db->where('id', $id);
        $this->db->update('tbpicture', $data);
    }
     private function _get_size($image) {
    $img = getimagesize($image);
    return Array('width'=>$img['0'], 'height'=>$img['1']);
  }
    function delete() {
        if ($this->uri->segment(5) != 'kosong.gif') {
            unlink($this->picture_path.'/thumbs/'.$this->uri->segment(5));
        }
        $this->db->where('id', $this->uri->segment(4));
        $this->db->delete('tbpicture');
        
    }
    function getSearchProduct() {
        $keyword = $this->input->post('keyword');
        $option = $this->input->post('option');
        $this->db->like($option,$keyword);
        return $this->db->get('tbproducts');
    }
}

?>
