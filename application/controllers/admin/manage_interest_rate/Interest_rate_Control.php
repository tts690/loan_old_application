<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Interest_rate_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Interest_rate/Interest_rate_settings', 'ir');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ir->select_rate_of_interest();
        $this->load->view('admin/manage_interest_rate/Interest_rate_view', $this->outputData);
    }

    private function _Manage_Interest_Create_Validate() {
        $this->load->library('form_validation');
//        $this->form_validation->set_rules('bank_name', 'Bank Code', 'trim|required');
//        $this->form_validation->set_rules('interest_rate', 'Interest Rate', 'trim|required');
//        $this->form_validation->set_rules('tenure', 'Tenure', 'trim|required');
//        $this->form_validation->set_rules('about', 'About', 'trim|required');
//        $this->form_validation->set_rules('features', 'Features', 'trim|required');
//        $this->form_validation->set_rules('title', 'Title', 'trim|required');
//        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('keywords', 'Keywords', 'trim|required');
    }

    public function interest_rate_create() {
        $this->_Manage_Interest_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 7680;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('photoUrl')) {

                $data = array();
                $data['bank_id'] = $_POST['bank_name'];
                $data['interest_rate'] = $_POST['interest_rate'];
                $data['tenure'] = $_POST['tenure'];
                $data['about'] = $_POST['about'];
                $data['feature'] = $_POST['features'];
                $data['title'] = $_POST['title'];
                $data['description'] = $_POST['description'];
                $data['keyword'] = $_POST['keywords'];
                $photoUrl = $_FILES['photoUrl']['name'];
                $data['photoUrl'] = $photoUrl;

                if ($this->ir->Manage_interest_rate_Create($data)) {

                    $this->outputData['error'] = 'Successfully Your Query is Created';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            } else {
                $this->outputData['error'] = validation_errors();
            }
//            $data['file_name'] = $_POST['bank_name'];
//            $file_name = $data['file_name'];
//            $filename = "$file_name.txt";
//            file_put_contents($file, $data);
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_interest_rate/interest_rate_create', $this->outputData);
    }

    private function _Edit_Interest_Rate_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_name', 'Bank Code', 'trim|required');
        $this->form_validation->set_rules('interest_rate', 'Interest Rate', 'trim|required');
        $this->form_validation->set_rules('tenure', 'Tenure', 'trim|required');
        $this->form_validation->set_rules('about', 'About', 'trim|required');
        $this->form_validation->set_rules('features', 'Features', 'trim|required');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('keywords', 'Keywords', 'trim|required');
    }

    public function EDIT_Interest_Rate() {
        $this->_Edit_Interest_Rate_Validate();
        if ($this->form_validation->run() === TRUE) {

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 1000;
            $config['max_width'] = 1024;
            $config['max_height'] = 7680;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);


            $data = array();
            $data['intrest_rate_id'] = $_POST['editing_id'];
            $data['bank_id'] = $_POST['bank_name'];
            $data['interest_rate'] = $_POST['interest_rate'];
            $data['tenure'] = $_POST['tenure'];
            $data['about'] = $_POST['about'];
            $data['feature'] = $_POST['features'];
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['keyword'] = $_POST['keywords'];
            $photoUrl = $_FILES['photoUrl']['name'];
            $data['photoUrl'] = $photoUrl;

            if ($this->upload->do_upload('photoUrl')) {
                if ($this->ir->Interest_Rate_Editing($data)) {
                    $this->outputData['error'] = "Successfully Editted";
                } else {
                    $this->outputData['error'] = "Failed TO Edit";
                }
            } else {
                $this->outputData['error'] = validation_errors();
            }
            
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_interest_rate/interest_rate_edit', $this->outputData);
    }

    public function Delete_Interest_Rate() {
        $id = $this->uri->segment(5);
        if ($this->ir->Interest_Rate_Delete($id)) {
            redirect('admin/manage_interest_rate/Interest_rate_Control');
        } else {
            redirect('admin/manage_interest_rate/Interest_rate_Control');
        }
        $this->load->view('admin/manage_interest_rate/Interest_rate_view', $this->outputData);
    }

}
