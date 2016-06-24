<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: contact controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 08 Desember 2014
*/

class Contact extends CI_Controller
{
	var $layout = 'site';

	function __construct(){
		parent::__construct();

		$this->load->model('admin/Contact_model');
		$this->load->model('admin/Map_model');
	}

	public function index(){
		$data['title']	= "Contact";

		$data['captcha'] = new Captcha_egg();
		$data['location']	= $this->Map_model->get_data(1);

		$data['active_menu']= 'contact';
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/contact';
		Sys::_render($data);
	}

	public function create(){
		$captcha = new Captcha_egg();

		if(isset($_POST['Contact']) && $captcha->validate_captcha() == true){
			$this->Contact_model->save();
			$this->session->set_flashdata('message','pesan berhasil terkirim.');
			redirect('contact');
		}else{
			$this->session->set_flashdata('message','data belum lengkap atau captcha salah');
			redirect('contact');
		}
	}
}

?>