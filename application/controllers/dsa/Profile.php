<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends DSA_Controller {

    public function __construct() {
        parent::__construct();
        $this->_flushOutputArray();
        //$this->load->model('user', 'u');
        if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
        $this->load->model('dsa/Profiles', 'p');
    }

    public function _flushOutputArray() {
        $this->outputData = array();
    }

    public function index() {
        $this->outputData['data'] = $this->p->getByEmail($this->session->userdata('ai'));
        $this->load->view('dsa/profile', $this->outputData);
    }

    public function edit() {
        $uridata = $this->uri->segment(4, 0);
        $data['userdata'] = $this->p->matchByUserId($uridata);

        if ($data) {
            $this->load->view('dsa/edit', $data);
        }
    }

    public function _profilevalidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('agency_name', 'Employee Name', 'required');
    }

    public function save() {
        $this->_profilevalidate();
        $data['error'] = '';
        
        if ($this->form_validation->run() === TRUE) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 7680;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('photoUrl')) {
                $formData['sr_agency_id'] = $this->session->userdata('ai');
                $formData['agency_name'] = $this->input->post('agency_name');
                $formData['gender'] = $this->input->post('gender');
                $photoUrl = $_FILES['photoUrl']['name'];
                $formData['photoUrl'] = $photoUrl;
                $formData['alternative_mob'] = $this->input->post('alternative_mob');
                $formData['dob'] = $this->input->post('dob');
                $formData['parmenent_address'] = $this->input->post('parmenent_address');
                $formData['present_address'] = $this->input->post('present_address');
                $formData['city'] = $this->input->post('city');
                $formData['region'] = $this->input->post('region');
                $formData['zipcode'] = $this->input->post('zipcode');
                $formData['country'] = $this->input->post('country');
                $formData['mobile'] = $this->input->post('mobile');
                $formData['email'] = $this->input->post('email');
                $formData['username'] = $this->input->post('username');
                
                $this->p->saveUser($formData);
                $data['userdata'] = $this->p->matchByUserId();
                
            } else {
                $data['error'] = validation_errors();
            }
            if ($data) {
                $data['error'] = 'Successfully Your Profile Updated';
            }
        } else {
            $data['error'] = validation_errors();
        }
        $this->load->view('dsa/edit', $data);
    }

}
