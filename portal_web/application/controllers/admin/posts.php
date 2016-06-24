<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: posts controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 27 Desember 2014
*/

class Posts extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'post';
		$this->load->model('admin/Posts_model');
	}

	public function index(){
		$data['title']	= 'Site Posts';

		$data['total_data']	= $this->Posts_model->total_data();
		if($data['total_data'] > 0){

			$data['data_obj']	= $this->Posts_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/posts/index';
		Sys::_render($data);
	}

	public function create(){
		$data['title']	= 'Input Posts';

		if(isset($_POST['Posts'])){
			// $this->upload_file($_POST['image']);

			$this->Posts_model->save();
			redirect('admin/posts');
		}

		// opt
		$data['list_post_category']	= $this->My_model->_opt('list_post_category');
		$data['list_status']		= $this->My_model->_opt('list_status');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/posts/create';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input Posts';

		if(isset($_POST['Posts'])){
			$this->Posts_model->save($id);
			redirect('admin/posts');
		}

		$data['data_set']	= $this->Posts_model->get_data($id);

		// opt
		$data['list_post_category']	= $this->My_model->_opt('list_post_category');
		$data['list_status']		= $this->My_model->_opt('list_status');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/posts/update';
		Sys::_render($data);
	}

	public function delete($id){
		$this->Posts_model->delete($id);
		redirect('admin/posts');
	}

	private function upload_file($file){
		$config['upload_path'] = '../assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '892';
		$config['max_height']  = '400';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);
	}
}

?>