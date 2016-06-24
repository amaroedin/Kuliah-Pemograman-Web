<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: contact controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 01 Januari 2015
*/

class Contact extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'kontak';
		$this->load->model('admin/Contact_model');
	}

	public function index(){
		$data['title']	= 'Site Kontak';

		$data['total_data']	= $this->Contact_model->total_data();
		if($data['total_data'] > 0){

			$data['data_obj']	= $this->Contact_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/contacts/index';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input Kontak';

		if(isset($_POST['Contact'])){
			$this->Contact_model->save($id);
			redirect('admin/contact');
		}

		$data['data_set']	= $this->Contact_model->get_data($id);

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/contacts/update';
		Sys::_render($data);
	}

	public function delete($id){
		$this->Contact_model->delete($id);
		redirect('admin/contact');
	}
}

?>