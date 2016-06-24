<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: Pages_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 26 Desember 2014
*/

class Pages_model extends CI_Model
{
	var $_table = 'pages';
	var $_path = './assets/uploads/pages/';

	function list_data($limit=10,$offset=0, $conditions=null) {
		$this->db->limit($limit,$offset);

		$this->db->select('t.*,x.name as category_name');
		$this->db->from($this->_table.' t');
		$this->db->join('pages_category x','t.id_category=x.id_category','left');
		return $this->db->get()->result();
	}

	function total_data($conditions=null) {
		$this->db->select('t.*');
		$this->db->from($this->_table.' t');
		$this->db->join('pages_category x','t.id_category=x.id_category','left');
		return $this->db->get()->num_rows();
	}

	function get_data($id) {
		return $this->db->get_where($this->_table, array('id_page'=>$id))->row();
	}

	function save($id=null) {
		// upload
		$image= Sys::_upload($this->_path,'image','file_name');

		$data = $_POST['Pages'];
		$data['id_user']= $this->session->userdata('id_user');
		$data['image']	= ($_FILES['image']['name'] != '' ? str_replace('./', '', $this->_path) : '').$image;

		if($id !=''){
			$data['page_update']	= gmt('datetime');
			
			$this->db->where('id_page',$id);
			$result = $this->db->update($this->_table, $data);
		}else{
			$result = $this->db->insert($this->_table, $data);
		}
		return $result;
	}

	function delete($id) {
		$this->db->where('id_page', $id);
		return $this->db->delete($this->_table);
	}
}

?>