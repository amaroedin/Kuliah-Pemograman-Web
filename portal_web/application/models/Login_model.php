<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: Login_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 24 Desember 2014
*/

class Login_model extends CI_Model
{
	var $_table = 'users';

	function valid_user($username, $password) {
		$where = array('username'=>$username,'password'=>md5($password));
		$result = $this->db->get_where($this->_table,$where);

		if($result->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function get_user($username, $password) {
		$where = array('username'=>$username,'password'=>md5($password));
		return $this->db->get_where($this->_table,$where)->row_array();
	}

	function update_user($username, $password) {
		$this->db->where(array('username'=>$username,'password'=>md5($password)));
		return $this->db->update($this->_table, array('last_login'=>gmt('datetime')));
	}
}

?>