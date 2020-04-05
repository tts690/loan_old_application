<?php

class Enquiry_Form extends Frontend_Controller {

    private function _Creating_Equiry() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('msg', 'Message', 'trim|required');
        $this->form_validation->set_rules('cnum', 'Contact number', 'trim|required');
    }

    public function index() {
        
        $this->_Creating_Equiry();
        if ($this->form_validation->run() === TRUE) {
            
            $data = array();
            $data['name'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['msg'] = $this->input->post('msg');
            $data['cnum'] = $this->input->post('cnum');
            $data['subject'] = 'Enquiry from website';
            $data['userData'] =  $data;
            
            $message = $this->load->view('enquiry_page', $data, true);

            if (sendEmail("pixsellowebindia@gmail.com", $data['subject'], $message)) {
                $this->outputData['error'] = 'Successfully mail sent';
            } else {
                $this->outputData['error'] = 'Failed to send mail';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }

        $this->load->view('enquiry', $this->outputData);
    }

}
?>

