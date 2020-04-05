<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Employee_Controller {

    public function __construct() {
        parent::__construct();
        $this->_flushOutputArray();
        //$this->load->model('user', 'u');
        if (!isLoggedIn_emp()) {
            redirect('employee/Signin', 'refresh');
        }

        $this->load->model('employee/profiles', 'p');
    }

    public function _flushOutputArray() {
        $this->outputData = array();
    }

    public function index() {
        $this->outputData['data'] = $this->p->getByEmail($this->session->userdata('eu'));
        $this->load->view('employee/profile', $this->outputData);
    }

    public function edit() {
        $uridata = $this->uri->segment(4, 0);
        $data['userdata'] = $this->p->matchByUserId($uridata);

        if ($data) {
            $this->load->view('employee/edit', $data);
        }
    }

    public function _profilevalidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('dob', 'DOB', 'required');
        $this->form_validation->set_rules('parmenent_address', 'Permanent Address', 'required');
        $this->form_validation->set_rules('present_address', 'Present Address', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('region', 'Region', 'required');
        $this->form_validation->set_rules('country', 'Country', 'required');
        $this->form_validation->set_rules('zipcode', 'ZipCode', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'User Name', 'required');
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
                $formData['emp_name'] = $this->input->post('emp_name');
                $formData['father_name'] = $this->input->post('father_name');
                $photoUrl = $_FILES['photoUrl']['name'];
                $formData['photoUrl'] = $photoUrl;
                $formData['dob'] = $this->input->post('dob');
                $formData['gender'] = $this->input->post('gender');
                $formData['parmenent_address'] = $this->input->post('parmenent_address');
                $formData['present_address'] = $this->input->post('present_address');
                $formData['city'] = $this->input->post('city');
                $formData['region'] = $this->input->post('region');
                $formData['zipcode'] = $this->input->post('zipcode');
                $formData['country'] = $this->input->post('country');
                $formData['mobile'] = $this->input->post('mobile');
                $formData['email'] = $this->input->post('email');
                $formData['username'] = $this->input->post('username');
                $data['error'] = $this->p->saveUser($formData);
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
        $this->load->view('employee/edit', $data);
    }

}
