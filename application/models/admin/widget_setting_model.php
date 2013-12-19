<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_category_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Widget_setting_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
   
    function update_ym() 
    {
        if ($this->input->post('ym_widget_set') === FALSE)
        {
             $data = array(
                'setting' => 0
            );
            $this->db->where('widget', 'ym_widget');
            $this->db->update('tbwidget_setting', $data);
        } else {
            $data = array(
                'setting' => 1
            );
            $this->db->where('widget', 'ym_widget');
            $this->db->update('tbwidget_setting', $data);
        }
    }
    function update_contact() 
    {
        if ($this->input->post('contact_widget_set') === FALSE)
        {
             $data = array(
                'setting' => 0
            );
            $this->db->where('widget', 'contact_widget');
            $this->db->update('tbwidget_setting', $data);
        } else {
            $data = array(
                'setting' => 1
            );
            $this->db->where('widget', 'contact_widget');
            $this->db->update('tbwidget_setting', $data);
        }
    }
   
}

?>
