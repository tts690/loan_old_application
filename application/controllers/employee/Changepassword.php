<?php

class Changepassword extends Employee_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('employee/Changepass','ch');
        if (!isLoggedIn_emp()) {
            redirect('employee/Signin', 'refresh');
        }
    }

    public function _passwordValidation() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
    }

    public function index() {
        /*
        $CI = & get_instance();
        $config = $CI->config->item('mail_config');
        print_r($config);
        die();*/
        /*
        $config = $this->config;
        $results = $config->config['mail_config'];
        print_r($results);
        //echo $config['mail_config']['protocol'] =;
        die();
       $config = $this->config;
        echo $config->config['mail_config']['protocol'];
        die();*/
        $this->_passwordValidation();
        if ($this->form_validation->run() == FALSE) {
            $this->outputData['error'] = validation_errors();
        } else {
            $userdata = $this->input->post();
            if ($userdata['newpassword'] == $userdata['confirmpassword']) {
                $validUser = $this->ch->matchBypass($this->input->post('oldpassword'));
                if ($validUser) {
                    $this->outputData['error'] = $this->ch->updatePassword($this->session->userdata('ei'), $this->input->post('newpassword'));
                    $this->outputData['error'] = 'Successfully Your Password Updated';
                } else {
                    $this->outputData['error'] = 'Invalid Old Password';
                }
            } else {
                $this->outputData['error'] = 'Confirm & NewPassword Do Not Match';
            }
        }
        $this->load->view('employee/changepassword', $this->outputData);
    }

}
