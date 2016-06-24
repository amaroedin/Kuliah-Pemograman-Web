<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: pages controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 26 Desember 2014
*/

class Pages extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'page';
		$this->load->model('admin/Pages_model','Pages_model');
	}

	public function index(){
		$data['title']	= 'Site Pages';

		$data['total_data']	= $this->Pages_model->total_data();
		if($data['total_data'] > 0){

			$data['data_obj']	= $this->Pages_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages/index';
		Sys::_render($data);
	}

	public function create(){
		$data['title']	= 'Input Site Pages';

		if(isset($_POST['Pages'])){
			$this->Pages_model->save();
			redirect('admin/pages');
		}

		// Opt
		$data['list_pages_category']= $this->My_model->_opt('list_pages_category');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages/update';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input Site Pages';

		if(isset($_POST['Pages'])){
			$this->Pages_model->save($id);
			redirect('admin/pages');
		}

		$data['data_set']	= $this->Pages_model->get_data($id);
		// Opt
		$data['list_pages_category']= $this->My_model->_opt('list_pages_category');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages/update';
		Sys::_render($data);
	}
}

?>