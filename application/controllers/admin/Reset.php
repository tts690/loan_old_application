<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset extends Admin_Controller {

	public function __construct(){
		parent::__construct();		
		$this->load->model('auth','auth');
		$this->load->model('user','u');
	}
	
	public function _flushOutputArray(){
		$this->outputData = array();
	}

	public function index(){
		if($this->auth->validateEmailForReset($this->uri->segment(4))){
			$this->outputData['autherror'] = 0;
		} else{
			$this->outputData['autherror'] = 1;
		}

		$this->load->view('admin/reset',$this->outputData);
	}

	private function _passwordValidate(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('password', 'Passowrd', 'trim|required');
		$this->form_validation->set_rules('cpassword', 'Confirm Passowrd', 'trim|required|callback_validConfirmPassword');
	}

	function validConfirmPassword($cpassword){
		$password = $this->input->post('password');
		if($password != $cpassword){
			$this->form_validation->set_message('validConfirmPassword', 'Password and Confirm New Password do not match');
			return FALSE;
		}
		return TRUE;
	} 


	public function password(){
		$this->_passwordValidate();
		if($this->form_validation->run() === TRUE){
			$data = array();
			$data['password'] = $_POST['password'];
                        
			$this->u->updatePassword($data['password'],$this->uri->segment(4));
			$this->u->updateReset($this->uri->segment(4),0);
			redirect('admin/signin','refresh');
		} else{
			$this->outputData['error'] = 'FAILED';
			$this->outputData['error'] =  validation_errors();
		}
		$this->load->view('admin/reset',$this->outputData);
	}
}
