<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Register_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }
    function save() {
        $data = array(
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'name' => $this->input->post('name'),
            'mobile_phone' => $this->input->post('mobile_phone')
        );
        $this->db->insert('tbuser', $data);
    }
   function email_cek($email)
	{
		
		$this->db->where('email', $email);
                $query = $this->db->get('tbuser');
		if($query->num_rows() != 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}

?>
