<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: my_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 26 Desember 2014
*/

class My_model extends CI_Model
{
	public function get_user($id,$field){
		$this->db->select($field);
		$data = $this->db->get_where('users', array('id_user'=>$id))->row_array();
		return $data[$field];
	}

	public function get_user_group($id,$field){
		$this->db->select($field);
		$data = $this->db->get_where('user_group', array('id_group'=>$id))->row_array();
		return $data[$field];
	}

	public function get_post_category($id,$field){
		$this->db->select($field);
		$data = $this->db->get_where('post_category', array('id_category'=>$id))->row_array();
		return $data[$field];
	}

	public function get_status($id){
		$data = '';
		foreach($this->list_status() as $key=>$val){
			if($id == $key){
				$data = $val;
			}
		}
		return $data;
	}

	public function get_post_group($id,$field){
		$this->db->select($field);
		$data = $this->db->get_where('post_group', array('id_group'=>$id))->row_array();
		return $data[$field];
	}

	private function list_post_group(){
		$this->db->order_by('name','ASC');
		return $this->db->get('post_group')->result();
	}

	private function list_pages_category(){
		$this->db->order_by('name','ASC');
		return $this->db->get('pages_category')->result();
	}

	private function list_post_category(){
		$this->db->order_by('name','ASC');
		return $this->db->get('post_category')->result();
	}

	private function list_status(){
		return array('1'=>'Aktif','0'=>'Tidak');
	}

	private function list_user_group(){
		$this->db->order_by('name','ASC');
		return $this->db->get('user_group')->result();
	}

	public function _opt($id,$where=null){
		if($id == 'list_post_category'){
			$data['list_post_category'][''] = 'Pilih Kategori';
			foreach($this->list_post_category() as $row){
				$data['list_post_category'][$row->id_category] = $row->name;
			}
		}elseif($id == 'list_status'){
			foreach($this->list_status() as $key=>$val){
				$data['list_status'][$key] = $val;
			}
		}elseif($id == 'list_user_group'){
			$data['list_user_group'][''] = 'Pilih Group';
			foreach($this->list_user_group() as $row){
				$data['list_user_group'][$row->id_group] = $row->name;
			}
		}elseif($id == 'list_pages_category'){
			$data['list_pages_category'][''] = 'Pilih Kategori';
			foreach($this->list_pages_category() as $row){
				$data['list_pages_category'][$row->id_category] = $row->name;
			}
		}elseif($id == 'list_post_group'){
			$data['list_post_group'][''] = 'Pilih Group';
			foreach($this->list_post_group() as $row){
				$data['list_post_group'][$row->id_group] = $row->name;
			}
		}

		return $data[$id];
	}
}

?>