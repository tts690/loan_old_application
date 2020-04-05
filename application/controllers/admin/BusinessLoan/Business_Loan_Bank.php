<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Business_Loan_Bank extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/bussiness_loan/Bussiness_Loan_Bank_Setting', 'blbs');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->blbs->select_get_bussiness_loan_bank_data();
        $this->load->view('admin/business_loan_bank/bussinessloan_bank_view', $this->outputData);
    }

    private function _Creating_Bank() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'trim|required');
    }

    public function Create_Bank() {
        $this->_Creating_Bank();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_name'] = $_POST['bank_name'];
            
            if ($this->blbs->Inserting_bank($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/business_loan_bank/bussiness_loan_bank_create', $this->outputData);
    }
    
    private function _Edit_Bank_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_name', 'Bank Name');
    }
    
    public function EDIT_Bank() {
        $id = $this->uri->segment(5);
        $this->_Edit_Bank_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['bank_name'] = $_POST['bank_name'];
            
            if ($this->blbs->Bank_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/business_loan_bank/bussiness_loan_bank_edit', $this->outputData);
    }

    public function Delete_bank() {
        $id = $this->uri->segment(5);
        if ($this->blbs->bank_Deleteing($id)) {
            redirect('admin/BusinessLoan/Business_Loan_Bank');
        } else {
            redirect('admin/BusinessLoan/Business_Loan_Bank');
        }
        $this->load->view('admin/business_loan_bank/bussinessloan_bank_view', $this->outputData);
    }

}
