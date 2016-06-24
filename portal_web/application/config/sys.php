<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
/*
program	: sys config
author 	: Amarudin M (amarudhien@gmail.com)
@version: 1.0, 26 Desember 2014
*/

class Sys
{
	public function _render($data){
		$this->load->view('templates/'.$data['layout'].'/main', $data);
	}

	public function _renderPartial($data){
		$this->load->view($data['template'], $data);
	}

	public function _security(){
		$id_user = $this->session->userdata('id_user');
		if($id_user == ''){
			redirect('admin/login');
		}
	}

	public function _upload($path=null,$name=null,$field=null) {

		$config['upload_path'] 	 = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['overwrite']	 = FALSE;
		$config['max_size']		 = 50000;
		
		$this->load->library('upload', $config);				
		
		if(!empty($_FILES[$name]['tmp_name'])){
			if(!$this->upload->do_upload($name)){
				$data['error'] = array('error' => $this->upload->display_errors());			
				$data['result']= false;
				echo $data['error']['error'];
			}else{
				$file = array('upload_data' => $this->upload->data());                
				$data['file_full']  = $config['upload_path'].$file['upload_data']['file_name'];
				$data['file_name']  = $file['upload_data']['file_name'];
				$data['result']	= true;
			}
			return $data[$field];
		}else{
			return $this->input->post($name.'_tmp');
		}
		
	}
	
}

?>