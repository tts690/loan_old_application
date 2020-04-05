<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * Developer By: Hemanth Raj
 */

class Signin extends DSA_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('dsa/Auth', 'auth');
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
                redirect('dsa/Dashboard', 'refresh');
            } else {
                $this->outputData['error'] = 'Invalid Login!!';
            }
        } else {
            
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('dsa/home', $this->outputData);
    }

}
