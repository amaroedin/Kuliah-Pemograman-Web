<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: Blog_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 12 Desember 2014
*/

class Blog_model extends CI_Model
{
	var $_post = 'posts';
	var $_post_category = 'post_category';

	function list_data($limit=0,$offset=0,$condition=null){
		if($limit !=0 && $offset !=0)
			$this->db->limit($limit,$offset);
		if(!empty($condition['order']))
			foreach($condition['order'] as $key => $val)
				$this->db->order_by($key, strtolower($val));
		else
			$this->db->order_by('id_category','ASC');
		if(!empty($condition['condition']))
			$this->db->where($condition['condition']);
		if(!empty($condition['condition_like']))
			$this->db->like($condition['condition_like']);

		$this->db->select('t.*,x.name as category_name');
		$this->db->from($this->_post.' t');
		$this->db->join($this->_post_category.' x','t.id_category=x.id_category','left');
		return $this->db->get()->result();
	}

	function total_data($condition=null){
		if(!empty($condition['condition']))
			$this->db->where($condition['condition']);
		if(!empty($condition['condition_like']))
			$this->db->like($condition['condition_like']);

		$this->db->select('t.*,x.name as category_name');
		$this->db->from($this->_post.' t');
		$this->db->join($this->_post_category.' x','t.id_category=x.id_category','left');
		return $this->db->get()->num_rows();
	}

	function get_data($id){
		return $this->db->get_where($this->_post,array('id_post'=>$id))->row();
	}

	function list_post_category(){
		return $this->db->get_where($this->_post_category,array('id_group'=>'1'))->result();
	}
}

?>