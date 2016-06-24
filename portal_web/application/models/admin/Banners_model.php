<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: Banners_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 01 Januari 2015
*/

class Banners_model extends CI_Model
{
	var $_table = 'banners';
	var $_path = './assets/uploads/slide/';

	function list_data($limit=10,$offset=0, $conditions=null) {
		$this->db->limit($limit,$offset);
		return $this->db->get($this->_table)->result();
	}

	function total_data($conditions=null) {
		return $this->db->get($this->_table)->num_rows();
	}

	function get_data($id) {
		return $this->db->get_where($this->_table, array('id_banner'=>$id))->row();
	}

	function save($id=null) {
		// upload
		$image= Sys::_upload($this->_path,'image','file_name');

		$data = $_POST['Banners'];
		$data['id_user']= $this->session->userdata('id_user');
		$data['image']	= ($_FILES['image']['name'] != '' ? str_replace('./', '', $this->_path) : '').$image;

		if($id !=''){
			$this->db->where('id_banner',$id);
			$result = $this->db->update($this->_table, $data);
		}else{
			$result = $this->db->insert($this->_table, $data);
		}
		return $result;
	}

	function delete($id) {
		$this->db->where('id_banner', $id);
		return $this->db->delete($this->_table);
	}
}

?>