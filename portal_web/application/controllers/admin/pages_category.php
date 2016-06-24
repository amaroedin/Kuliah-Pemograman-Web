<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: pages_category controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 27 Desember 2014
*/

class Pages_category extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'page';
		$this->load->model('admin/PagesCategory_model');
	}

	public function index(){
		$data['title']	= 'Site Page Kategori';

		$data['total_data']	= $this->PagesCategory_model->total_data();
		if($data['total_data'] > 0){

			$data['data_obj']	= $this->PagesCategory_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages_category/index';
		Sys::_render($data);
	}

	public function create(){
		$data['title']	= 'Input Page Kategori';

		if(isset($_POST['PagesCategory'])){
			$this->PagesCategory_model->save();
			redirect('admin/pages_category');
		}

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages_category/create';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input Page Kategori';

		if(isset($_POST['PagesCategory'])){
			$this->PagesCategory_model->save($id);
			redirect('admin/pages_category');
		}

		$data['data_set']	= $this->PagesCategory_model->get_data($id);

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/pages_category/update';
		Sys::_render($data);
	}

	public function delete($id){
		$this->PagesCategory_model->delete($id);
		redirect('admin/pages_category');
	}
}

?>