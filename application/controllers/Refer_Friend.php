<?php

class Refer_Friend extends Frontend_Controller {
    
    private function _Creating_Refer_Friend() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('msg', 'Message', 'trim|required');
        $this->form_validation->set_rules('f_email', 'Friends email', 'trim|required');
    }
    
    
    function index() {
        $this->_Creating_Refer_Friend();
        if ($this->form_validation->run() === TRUE) {
            
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['msg'] = $this->input->post('msg');
            $data['f_email'] = $this->input->post('f_email');
            $data['subject'] = 'Friends refer from website';
            $data['userData'] =  $data;
            
            $message = $this->load->view('friend_refer_page', $data, true);

            if (sendEmail("pixsellowebindia@gmail.com", $data['subject'], $message)) {
                $this->outputData['error'] = 'Successfully mail sent';
            } else {
                $this->outputData['error'] = 'Failed to send mail';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }

        $this->load->view('refer_a_friend');
    }

}
