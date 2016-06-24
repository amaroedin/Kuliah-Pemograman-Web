<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: blog controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 08 Desember 2014
*/

class Blog extends CI_Controller
{
	var $layout = 'site';

	function __construct(){
		parent::__construct();

		$this->load->model('Blog_model');
	}

	public function index(){
		$data['title']	= 'Blog';

		$data['list_category']	= $this->Blog_model->list_post_category();
		$data['per_page']		= $this->input->get('per_page') ? $this->input->get('per_page') : page_limit;

		$data['category']		= $this->input->get('category');

		$condition['condition']	= '';
		$condition['condition_like'] = '';
		if($data['category'] !=''){
			$condition['condition']	= array('t.id_category'=>$data['category']);
		}
		if(isset($_POST['search'])){
			$condition['condition_like'] = array('t.title'=>$_POST['search']);
		}

		$data['total_data']		= $this->Blog_model->total_data($condition);
		if($data['total_data'] > 0){
			$conf['uri_segment']= 3;
			$conf['num_links']	= 10;
			$conf['base_url'] 	= site_url('blog/index');
			$conf['offset']		= abs((int)$this->uri->segment($conf['uri_segment']));
			$conf['limit']		= page_limit;
			$conf['per_page'] 	= $data['per_page'];
			$conf['total_rows']	= $data['total_data'];

			$this->pagination->initialize($data);
		
			$data['paging'] 	= $this->pagination->create_links();

			$data['list_data']	= $this->Blog_model->list_data($conf['per_page'],$conf['offset'],$condition);
		}

		$data['active_menu']= 'blog';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/blog';
		Sys::_render($data);
	}

	public function detail($id){
		if($id ==''){
			redirect('blog');
		}
		$data['category']		= $this->input->get('category');
		
		$data['set_data']	= $this->Blog_model->get_data($id);
		$data['list_category']	= $this->Blog_model->list_post_category();

		$data['title']		= $data['set_data']->title;
		$data['active_menu']= 'blog';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/blog_detail';
		Sys::_render($data);
	}
}

?>