<?php
/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Loan_Control extends Admin_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Loans/LoanSettings', 'ls');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ls->select_get_loans();
        $this->load->view('admin/manage_loans/manage_loans_view', $this->outputData);
    }    
    
    private function _Manage_Loan_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('LoanCode', 'Loan Code', 'trim|required');
        $this->form_validation->set_rules('LoanName', 'Loan Name', 'trim|required');
    }

    public function Create_Manage_Loan() {
        $this->_Manage_Loan_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['LoanCode'] = $_POST['LoanCode'];
            $data['LoanName'] = $_POST['LoanName'];
            
            if ($this->ls->Manage_Loan_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_loans/loan_create', $this->outputData);
    }
    
    
     private function _Edit_Loan_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('LoanCode', 'Bank Code', 'trim|required');
        $this->form_validation->set_rules('LoanName', 'Bank Name', 'trim|required');        
    }

    public function EDIT_Loan() {
        $this->_Edit_Loan_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['id'] = $_POST['editing_id'];
            $data['LoanCode'] = $_POST['LoanCode'];
            $data['LoanName'] = $_POST['LoanName'];            

            if ($this->ls->Loan_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_loans/loan_edit', $this->outputData);
    }
    
    public function Delete_Loan(){
        $id = $this->uri->segment(5);        
        if ($this->ls->Loan_Delete($id)) {
            redirect('admin/manage_loans/Loan_Control');
        } else {
            redirect('admin/manage_loans/Loan_Control');
        }
        $this->load->view('admin/manage_loans/manage_loans_view', $this->outputData);
    }
}
