<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: site controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 08 Desember 2014
*/

class Site extends CI_Controller
{
	var $layout = 'site';

	function __construct(){
		parent::__construct();

		$this->load->model('Site_model');
	}

	public function index(){
		$data['title']	= "Home";

		$data['list_banner']		= $this->Site_model->list_banner();
		$data['list_page_category']	= $this->Site_model->list_page_category(3);
		$data['list_news']			= $this->Site_model->list_news(4);
		
		$data['active_menu']= 'home';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/index';
		Sys::_render($data);
	}

	public function about_us(){
		$data['title']	= 'About Us';

		$condition['condition']	= array('id_category'=>'0','name'=>'about');
		$data['data_set']	= $this->Site_model->get_page($condition);

		$data['active_menu']= 'about_us';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/about_us';
		Sys::_render($data);
	}

	public function services(){
		$data['title']	= 'Services';

		// service category
		$category['order']	= array('name'=>'ASC');
		$data['list_page_category']		= $this->Site_model->list_page_category(page_limit,0,$category);
		$category_items['condition'] = array('id_category !='=>'0');
		$data['list_page_category_item']= $this->Site_model->list_page($category_items);

		$data['active_menu']= 'services';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/services';
		Sys::_render($data);
	}
}
?>