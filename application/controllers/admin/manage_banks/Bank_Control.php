<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Bank_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Banks/Banksetting', 'bs');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->bs->select_get_bank();
        $this->load->view('admin/manage_banks/manage_bank_view', $this->outputData);
    }

    private function _Manage_Bank_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('BankCode', 'Bank Code', 'trim|required');
        $this->form_validation->set_rules('BankName', 'Bank Name', 'trim|required');
        $this->form_validation->set_rules('Computeon', 'Compute ON', 'trim|required');
    }

    public function Create_Manage_Bank() {
        $this->_Manage_Bank_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['BankCode'] = $_POST['BankCode'];
            $data['BankName'] = $_POST['BankName'];
            $data['Computeon'] = $_POST['Computeon'];
            
            if ($this->bs->Manage_Bank_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_banks/bank_create', $this->outputData);
    }

    private function _Edit_Bank_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('BankCode', 'Bank Code', 'trim|required');
        $this->form_validation->set_rules('BankName', 'Bank Name', 'trim|required');
        $this->form_validation->set_rules('Computeon', 'Compute ON', 'trim|required');
    }

    public function EDIT_Bank() {
        $this->_Edit_Bank_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['id'] = $_POST['editing_id'];
            $data['BankCode'] = $_POST['BankCode'];
            $data['BankName'] = $_POST['BankName'];
            $data['Computeon'] = $_POST['Computeon'];

            if ($this->bs->Bank_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_banks/bank_edit', $this->outputData);
    }
    
    public function Delete_Bank(){
        $id = $this->uri->segment(5);        
        if ($this->bs->Bank_Delete($id)) {
            redirect('admin/manage_banks/Bank_Control');
        } else {
            redirect('admin/manage_banks/Bank_Control');
        }
        $this->load->view('admin/manage_banks/manage_bank_view', $this->outputData);
    }

}
