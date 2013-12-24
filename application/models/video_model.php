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
class Video_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function get_video() {
        $this->db->order_by('id', 'desc');
        return $this->db->get('tbvideo');
    }
   
}

?>
