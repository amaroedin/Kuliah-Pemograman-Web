<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: Site_model model
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 12 Desember 2014
*/

class Site_model extends CI_Model
{
	var $_pages = 'pages';
	var $_post 	= 'posts';
	var $_pages_category= 'pages_category';
	var $_post_category	= 'post_category';
	var $_banner = 'banners';

	function list_banner(){
		return $this->db->get_where($this->_banner,array('status'=>1))->result();
	}

	function list_page($condition=null){
		if(!empty($condition['order']))
			foreach($condition['order'] as $key => $val)
				$this->db->order_by($key, strtolower($val));
		else
			$this->db->order_by('id_category','ASC');
		if(!empty($condition['condition']))
			$this->db->where($condition['condition']);

		return $this->db->get($this->_pages)->result();
	}

	function get_page($condition){
		if(!empty($condition['condition']))
			$this->db->where($condition['condition']);

		return $this->db->get($this->_pages)->row();
	}

	function list_page_category($limit=0, $offset=0,$condition=null){
		if(!empty($condition['order']))
			foreach($condition['order'] as $key => $val)
				$this->db->order_by($key, strtolower($val));
		else
			$this->db->order_by('id_category','ASC');
		if(!empty($condition['condition']))
			$this->db->where($condition['condition']);

		$this->db->limit($limit, $offset);
		return $this->db->get($this->_pages_category)->result();
	}

	function list_news($limit=0, $offset=0){
		$this->db->limit($limit, $offset);
		$this->db->where('x.id_group',1);
		$this->db->from($this->_post.' t');
		$this->db->join($this->_post_category.' x','t.id_category=x.id_category','left');
		return $this->db->get()->result();
	}
}

?>