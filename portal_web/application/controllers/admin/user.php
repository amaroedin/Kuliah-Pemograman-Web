
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
program	: user controller
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 30 Desember 2014
*/

class User extends CI_Controller
{
	var $layout = 'admin';
	public $class_nav;

	function __construct(){
		parent::__construct();
		Sys::_security();

		$this->class_nav = 'user';
		$this->load->model('admin/User_model');
	}

	public function index(){
		$data['title']	= 'User';

		$data['total_data']	= $this->User_model->total_data();
		if($data['total_data'] > 0){
			$data['data_obj']	= $this->User_model->list_data();
		}

		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/user/index';
		Sys::_render($data);
	}

	public function create(){
		$data['title']	= 'Input User';

		if(isset($_POST['Users'])){
			$this->User_model->save();
			redirect('admin/user');
		}

		// opt
		$data['list_user_group']	= $this->My_model->_opt('list_user_group');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/user/create';
		Sys::_render($data);
	}

	public function update($id){
		$data['title']	= 'Input User';

		if(isset($_POST['Users'])){
			$this->User_model->save();
			redirect('admin/user');
		}

		$data['data_set']	= $this->User_model->get_data($id);

		// opt
		$data['list_user_group']	= $this->My_model->_opt('list_user_group');

		$data['form_action']=current_url();
		$data['layout']		= $this->layout;
		$data['template']	= $data['layout'].'/user/update';
		Sys::_render($data);
	}

	public function delete($id){
		$this->User_model->delete($id);
		redirect('admin/user');
	}
}

?>