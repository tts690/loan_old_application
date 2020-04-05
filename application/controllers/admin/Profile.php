<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->_flushOutputArray();
        $this->load->model('user', 'u');
        $this->load->model('profiles', 'p');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function _flushOutputArray() {
        $this->outputData = array();
    }

    public function index() {
        $this->outputData['data'] = $this->u->getByEmail($this->session->userdata('u'));
        $this->load->view('admin/profile', $this->outputData);
    }

    public function edit() {
        $uridata = $this->uri->segment(3, 0);
        $data['userdata'] = $this->p->matchByUserId($uridata);

        if ($data) {
            $this->load->view('admin/edit', $data);
        }
    }

    public function _profilevalidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('firstName', 'FirstName', 'required');
        $this->form_validation->set_rules('lastName', 'LastName', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required'); 
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        $this->form_validation->set_rules('zipcode', 'ZipCode', 'required');
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
                $formData['firstName'] = $this->input->post('firstName');
                $formData['lastName'] = $this->input->post('lastName');
                $formData['gender'] = $this->input->post('gender');
                $formData['dob'] = $this->input->post('dob');
                $formData['mobile'] = $this->input->post('mobile');
                $formData['alternative_mob'] = $this->input->post('alternative_mob');
                $formData['address'] = $this->input->post('address');
                $formData['country'] = $this->input->post('country');
                $formData['region'] = $this->input->post('region');
                $formData['city'] = $this->input->post('city');
                $formData['zipcode'] = $this->input->post('zipcode');
                $photoUrl = $_FILES['photoUrl']['name'];
                $formData['photoUrl'] = $photoUrl;                
                $formData['id'] = $this->session->userdata('i');   
                $data['error'] = $this->p->saveUser($formData);
                $data['userdata'] = $this->p->matchByUserId();
            }else{
                $data['error'] = validation_errors();
            }
            if ($data) {
                $data['error'] = 'Successfully Your Profile Updated';
            }
        } else {
            $data['error'] = validation_errors();
        }
        $this->load->view('admin/edit', $data);
    }
}
