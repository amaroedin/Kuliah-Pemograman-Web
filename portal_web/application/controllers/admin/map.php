<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: map controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 31 Desember 2014
*/

class Map extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'lokasi';
		$this->load->model('admin/Map_model');
	}

	public function index(){
		$data['title']	= 'Site Lokasi';

		$data['total_data']	= $this->Map_model->total_data();
		if($data['total_data'] > 0){

			$data['data_set']	= $this->Map_model->get_data(1);
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/maps/index';
		Sys::_render($data);
	}

	public function save(){
		$id = $this->input->post('id_map');
		$this->Map_model->save($id);
		redirect('admin/map');
	}
}

?>