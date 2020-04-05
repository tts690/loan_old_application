<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Agency_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Agency/Agency_setting', 'ags');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ags->select_get_agency();
        $this->load->view('admin/agency/agency_view', $this->outputData);
    }

    public function Get_State_City() {
        $state_id = $_POST['selected_state'];
        $this->outputData['state_name'] = $this->ags->select_get_state_city($state_id);
        $this->outputData['bank_name'] = $this->ags->select_get_state_bank($state_id);
        echo json_encode($this->outputData);
    }

    private function _Creating_Agency() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('agency_name', 'Agency Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('contact_name', 'Contact Name', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required');
    }

    public function Create_Agency() {
        $this->_Creating_Agency();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_state_id'] = $_POST['state_id'];
            $data['cities_of_state_id'] = $_POST['selected_city'][0];
            $data['bank_id'] = $_POST['selected_bank'][0];
            $data['agency_name'] = $_POST['agency_name'];
            $data['agency_address'] = $_POST['address'];
            $data['contact_person'] = $_POST['contact_name'];
            $data['phone'] = $_POST['phone'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['password']);
            $data['sms_approve'] = $_POST['sms_approve'];
            $data['email_approve'] = $_POST['email_approve'];
            $data['status'] = $_POST['status'];
            
            if ($_POST['password'] == $_POST['cpassword']) {
                foreach ($_POST['selected_city'] as $city) {
                    foreach ($_POST['selected_bank'] as $bank) {
                        $data['cities_of_state_id'] = $city;
                        $data['bank_id'] = $bank;
                        $agency_id = $this->ags->Inserting_agency($data);
                        
                        $result = $this->ags->Inserting_agency_profile($agency_id);
                        if ($result) {
                            $this->outputData['error'] = 'Successfully Your Query is Created';
                        } else {
                            $this->outputData['error'] = 'Failed To Insert';
                        }
                    }
                }
            } else {
                $this->outputData['error'] = 'Password and Confirm password is not matching';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/agency/agency_create', $this->outputData);
    }

    private function _Edit_Agency_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('agency_name', 'Agency Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('contact_name', 'Contact Name', 'trim|required');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    }

    public function EDIT_Agency() {
        $id = $this->uri->segment(5);
        $this->_Edit_Agency_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['sr_state_id'] = $_POST['state_id'];
            $data['agency_name'] = $_POST['agency_name'];
            $data['agency_address'] = $_POST['address'];
            $data['contact_person'] = $_POST['contact_name'];
            $data['phone'] = $_POST['phone'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['status'] = $_POST['status'];
            $data['sms_approve'] = $_POST['sms_approve'];
            $data['email_approve'] = $_POST['email_approve'];
            
            if ($this->ags->Agency_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/agency/agency_edit', $this->outputData);
    }

    public function Delete_Agency() {
        $id = $this->uri->segment(5);
        if ($this->ags->Agency_Delete($id)) {
            redirect('admin/agency/Agency_Control');
        } else {
            redirect('admin/agency/Agency_Control');
        }
        $this->load->view('admin/agency/agency_view', $this->outputData);
    }
}
