<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: dashboard controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 26 Desember 2014
*/

class Dashboard extends CI_Controller
{
	var $layout	= 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();
		
		$this->class_nav = 'dashboard';
	}

	public function index(){
		$data['title']		= 'Dashboard';

		$data['layout']		= $this->layout;
		$data['template']	= 'admin/dashboard/index';
		Sys::_render($data);
	}
}

?>