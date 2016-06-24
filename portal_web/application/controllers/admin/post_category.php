<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: post_category controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 27 Desember 2014
*/

class Post_category extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'post';
		$this->load->model('admin/PostCategory_model');
	}

	public function index(){
		$data['title']	= 'Site Post Kategori';

		$data['total_data']	= $this->PostCategory_model->total_data();
		if($data['total_data'] > 0){

			$data['data_obj']	= $this->PostCategory_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/post_category/index';
		Sys::_render($data);
	}

	public function create(){
		$data['title']	= 'Input Post Kategori';

		if(isset($_POST['PostCategory'])){
			$this->PostCategory_model->save();
			redirect('admin/post_category');
		}

		// Opt
		$data['list_post_group']= $this->My_model->_opt('list_post_group');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/post_category/create';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input Post Kategori';

		if(isset($_POST['PostCategory'])){
			$this->PostCategory_model->save($id);
			redirect('admin/post_category');
		}

		$data['data_set']	= $this->PostCategory_model->get_data($id);
		// Opt
		$data['list_post_group']= $this->My_model->_opt('list_post_group');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/post_category/update';
		Sys::_render($data);
	}

	public function delete($id){
		$this->PostCategory_model->delete($id);
		redirect('admin/post_category');
	}
}

?>