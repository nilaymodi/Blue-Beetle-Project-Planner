<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('pphome');
	}

	public function projectplanner() {
		$this->load->view('projectplanner');
	}

	public function success() {
		$this->load->library('Notifications');
		$data = array();
		$upload_error = "";
		

		if(isset($_FILES['look-007']) && $_FILES['look-007']['name'] != ""){
			$config = array();
			$config['upload_path'] = 'temp_files/';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']	= '2048';
			
			$this->load->library('upload');
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('look-007')){
				$data = $this->upload->data();	
				$upload_error = "";
			} else {
				$upload_error = $this->upload->display_errors();
			}
				
		}

		$email = $this->notifications->create_email($_POST, $data);  // Email goes to blue beetle
		$this->load->view('success',array('results' => array('data'=>$data,'email'=>$email, 'upload_error'=>$upload_error)));
		

	}


}
