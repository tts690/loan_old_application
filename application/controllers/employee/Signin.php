<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Signin extends Employee_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee/Auth', 'auth');
        
    }

    private function _loginValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Passowrd', 'trim|required');
    }

    public function index() {
    
        $this->_loginValidate();
        if ($this->form_validation->run() === TRUE) {
        
            $data = array();
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];

            if ($this->auth->authenticate($data['username'], $data['password'])) {
                redirect('employee/Dashboard', 'refresh');
            } else {
                $this->outputData['error'] = 'Invalid Login!!';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('employee/home', $this->outputData);
    }
    
    private function _forgot_Employee() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('forgot', 'Employee Name', 'trim|required');
    }

    function forgot_password() {
        $this->_forgot_Employee();
        if ($this->form_validation->run() === TRUE) {
            $email = $_POST['forgot'];
            $employee_result = $this->auth->check_dsa_id($email);
            $data['userData'] = $employee_result[0];
            echo $message = $this->load->view('resetpassword', $data, true);
            die();

            if (!sendEmail($employee_result[0]['email'], 'Reset / Change your password Myloandetails.com', $message)) {
                $this->outputData['error'] = ' Problem in sending mail , please try again';
            } else {
                $this->outputData['error'] = 'Mail sent successfully';
            }
            
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('employee_forgot_password', $this->outputData);
    }

}
