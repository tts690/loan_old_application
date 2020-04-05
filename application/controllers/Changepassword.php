<?php

class Changepassword extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Changepass_1', 'ch');
        if (!$this->session->userdata('uu')) {
            redirect('home-loan-faq', 'refresh');
        }
    }

    public function _passwordValidation() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'required');
    }

    public function index() {
        $this->_passwordValidation();
        if ($this->form_validation->run() == FALSE) {
            $this->outputData['error'] = validation_errors();
        } else {
            $userdata = $this->input->post();
            if ($userdata['newpassword'] == $userdata['confirmpassword']) {
                $validUser = $this->ch->matchBypass($this->input->post('oldpassword'));
                if ($validUser) {
                    $this->outputData['error'] = $this->ch->updatePassword($this->session->userdata('uui'), $this->input->post('newpassword'));
                    $this->outputData['error'] = 'Successfully Your Password Updated';
                } else {
                    $this->outputData['error'] = 'Invalid Old Password';
                }
            } else {
                $this->outputData['error'] = 'Confirm & NewPassword Do Not Match';
            }
        }
        $this->load->view('changepassword', $this->outputData);
    }

}
