<?php

class Dsa_Register extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DSA_Settings', 'dsa');
    }

    function index() {
        $this->load->view('dsa_register');
    }

    private function _forgot_Agency() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('forgot', 'Agency Name', 'trim|required');
    }

    function forgot_password() {
        $this->_forgot_Agency();
        if ($this->form_validation->run() === TRUE) {
            $user_id = $_POST['forgot'];
            $dsa_result = $this->dsa->check_dsa_id($user_id);
            
            $data['userData'] = $dsa_result[0];
            $message = $this->load->view('resetpassword', $data, true);

            if (!sendEmail($dsa_result[0]['email'], 'Reset / Change your password Myloandetails.com', $message)) {
                $this->outputData['error'] = ' Problem in sending mail , please try again';
            } else {
                $this->outputData['error'] = 'Mail sent successfully';
            }
            
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('agency_forgot_password', $this->outputData);
    }

}
