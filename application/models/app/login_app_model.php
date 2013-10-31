<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of login_admin_model
 *
 * @author Irfan Mahfudz Guntur - ayes@bsmsite.com
 */

class Login_app_model extends CI_Model {
    private $table = 'tbuser';
	function __construct()
	{
		parent::__construct();
	}
	function proses($email,$pass)
	{	
		$this->db->where('email', $email);
                $this->db->where('password', $pass);
		$this->db->limit(1);
		$q = $this->db->get($this->table);
	    return (($q->num_rows() == 1) ? TRUE : FALSE);
	}
	function get_nama($email,$pass)
	{
		$where = "email = '$email' and password = '$pass'";
		$this->db->where($where);
		$this->db->select('id, username, name, status');
		$this->db->limit(1);
		return $this->db->get($this->table);
	}

}



?>

