<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('auth', 'auth');
        $this->load->model('user', 'u');
    }

    public function _flushOutputArray() {
        $this->outputData = array();
    }

    private function _forgotValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
    }

    public function index() {
        $this->_forgotValidate();
        $this->outputData['error'] = '';
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['email'] = $_POST['email'];
            if ($this->auth->checkEmailExistWithStatus($data['email'], 1)) {
                $userData = $this->u->getByEmail($data['email']);
                $message = $this->load->view('admin/email_template/resetpassword', $userData, true);

                if (!sendEmail($data['email'], 'Reset Password', $message)) {
                    $this->outputData['forgotStatus'] = 'MAILFAILED';
                    $this->outputData['error'] = ' Problem in sending mail , please try again';
                } else {
                    $this->outputData['forgotStatus'] = 'SUCCESS';
                    $this->u->updateReset(md5($data['email']), 1);
                }
            }
        } else {
            $this->outputData['forgotStatus'] = 'FAILED';
        }
        $this->load->view('admin/forgot', $this->outputData);
    }

}
