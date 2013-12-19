<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_admin_model
 *
 * @author BaseSystem Management http://bsmsite.com
 */
class Login_admin_model extends CI_Model {
    private $table = 'tbadmin';
	
	function __construct()
	{
		parent::__construct();
	}
	
	function proses($user,$pass)
	{	
		$this->db->where('username', $user);
                $this->db->where('password', $pass);
		$this->db->limit(1);
		$q = $this->db->get($this->table);
	    return (($q->num_rows() == 1) ? TRUE : FALSE);
	}
	
	function get_nama($user,$pass)
	{
		$where = "username = '$user' and password = '$pass'";
		$this->db->where($where);
		$this->db->select('name, id');
		$this->db->limit(1);
		
		return $this->db->get($this->table);
	}
}

?>
