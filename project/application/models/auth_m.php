<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class auth_m extends CI_Model
{
	function login($user, $pass)
	{
		$this->db->where('username', $user);
		$this->db->where('pass', sha1($pass));
		$query = $this->db->get('tuser');
		if ($query->num_rows() == 0) {
			return false;
		} else {
			return $query;
		}
	}
}