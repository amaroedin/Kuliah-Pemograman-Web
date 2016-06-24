<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: login controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 24 Desember 2014
*/

class Login extends CI_Controller
{
	function __construct(){
		parent::__construct();

		$this->load->model('Login_model');
	}

	public function index(){
		$data['title']	= 'Login Administrator';

		$this->load->view('admin/login', $data);
	}

	public function sign_in(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->Login_model->valid_user($username, $password) == TRUE) {
			$this->Login_model->update_user($username, $password);

			$data = $this->Login_model->get_user($username, $password);
			$this->session->set_userdata($data);

			redirect('admin/dashboard');
		}else{
			$this->session->set_flashdata('message','username atau password salah.');
			redirect('admin/login');
		}
	}

	public function sign_out(){
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}

?>