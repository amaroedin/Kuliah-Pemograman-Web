<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: Map_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 31 Desember 2014
*/

class Map_model extends CI_Model
{
	var $_table = 'map';

	function list_data($limit=10,$offset=0, $conditions=null) {
		$this->db->limit($limit,$offset);
		return $this->db->get($this->_table)->result();
	}

	function total_data($conditions=null) {
		return $this->db->get($this->_table)->num_rows();
	}

	function get_data($id) {
		return $this->db->get_where($this->_table, array('id_map'=>$id))->row();
	}

	function save($id=null) {
		$data = $_POST['Map'];

		if($id !=''){
			$this->db->where('id_map',$id);
			$result = $this->db->update($this->_table, $data);
		}else{
			$result = $this->db->insert($this->_table, $data);
		}
		return $result;
	}

	function delete($id) {
		$this->db->where('id_map', $id);
		return $this->db->delete($this->_table);
	}
}

?>