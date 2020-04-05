<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Personal_Loan extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/personal_loan/Personal_loan_setting', 'pls');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->pls->select_get_personal_loan_data();
        $this->load->view('admin/personal_loan/personalloan_view', $this->outputData);
    }

    private function _Creating_Personal_Loan() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_id', 'Bank Name', 'required|is_natural');
        $this->form_validation->set_rules('salary1', 'Salary 1', 'trim|required');
        $this->form_validation->set_rules('salary2', 'Salary 2', 'trim|required');
        $this->form_validation->set_rules('salary3', 'Salary 3', 'trim|required');
        $this->form_validation->set_rules('salary4', 'Salary 4', 'trim|required');
        $this->form_validation->set_rules('cat_a1', 'Cat a1', 'trim|required');
        $this->form_validation->set_rules('cat_a2', 'Cat a2', 'trim|required');
        $this->form_validation->set_rules('cat_a3', 'Cat a3', 'trim|required');
        $this->form_validation->set_rules('cat_a4', 'Cat a4', 'trim|required');
        $this->form_validation->set_rules('cat_b1', 'Cat b1', 'trim|required');
        $this->form_validation->set_rules('cat_b2', 'Cat b2', 'trim|required');
        $this->form_validation->set_rules('cat_b3', 'Cat b3', 'trim|required');
        $this->form_validation->set_rules('cat_b4', 'Cat b4', 'trim|required');
        $this->form_validation->set_rules('cat_c1', 'Cat c1', 'trim|required');
        $this->form_validation->set_rules('cat_c2', 'Cat c2', 'trim|required');
        $this->form_validation->set_rules('cat_c3', 'Cat c3', 'trim|required');
        $this->form_validation->set_rules('cat_c4', 'Cat c4', 'trim|required');
        $this->form_validation->set_rules('self_employee1', 'Self Employee1', 'trim|required');

        $this->form_validation->set_rules('processing_fee1', 'Processing Fee1', 'trim|required');

        $this->form_validation->set_rules('tenure1', 'Tenure 1', 'trim|required');
        $this->form_validation->set_rules('preclosure_charge1', 'Pre-closure Charge1', 'trim|required');
    }

    public function Create_Personal_Loan() {
        $this->_Creating_Personal_Loan();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_id'] = $_POST['bank_id'];
            $data['salary1'] = $_POST['salary1'];
            $data['salary2'] = $_POST['salary2'];
            $data['salary3'] = $_POST['salary3'];
            $data['salary4'] = $_POST['salary4'];
            $data['cat_a1'] = $_POST['cat_a1'];
            $data['cat_a2'] = $_POST['cat_a2'];
            $data['cat_a3'] = $_POST['cat_a3'];
            $data['cat_a4'] = $_POST['cat_a4'];
            $data['cat_b1'] = $_POST['cat_b1'];
            $data['cat_b2'] = $_POST['cat_b2'];
            $data['cat_b3'] = $_POST['cat_b3'];
            $data['cat_b4'] = $_POST['cat_b4'];
            $data['cat_c1'] = $_POST['cat_c1'];
            $data['cat_c2'] = $_POST['cat_c2'];
            $data['cat_c3'] = $_POST['cat_c3'];
            $data['cat_c4'] = $_POST['cat_c4'];
            $data['self_employee1'] = $_POST['self_employee1'];
            $data['self_employee2'] = $_POST['self_employee2'];            
            $data['processing_fee1'] = $_POST['processing_fee1'];
            $data['processing_fee2'] = $_POST['processing_fee2'];            
            $data['tenure1'] = $_POST['tenure1'];            
            $data['preclosure_charge1'] = $_POST['preclosure_charge1'];
            
            if ($this->pls->Inserting_personal_loan($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/personal_loan/personal_loan_create', $this->outputData);
    }
    
    private function _Edit_Personal_loan_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('salary1', 'Salary 1', 'trim|required');
        $this->form_validation->set_rules('salary2', 'Salary 2', 'trim|required');
        $this->form_validation->set_rules('salary3', 'Salary 3', 'trim|required');
        $this->form_validation->set_rules('salary4', 'Salary 4', 'trim|required');
        $this->form_validation->set_rules('cat_a1', 'Cat a1', 'trim|required');
        $this->form_validation->set_rules('cat_a2', 'Cat a2', 'trim|required');
        $this->form_validation->set_rules('cat_a3', 'Cat a3', 'trim|required');
        $this->form_validation->set_rules('cat_a4', 'Cat a4', 'trim|required');
        $this->form_validation->set_rules('cat_b1', 'Cat b1', 'trim|required');
        $this->form_validation->set_rules('cat_b2', 'Cat b2', 'trim|required');
        $this->form_validation->set_rules('cat_b3', 'Cat b3', 'trim|required');
        $this->form_validation->set_rules('cat_b4', 'Cat b4', 'trim|required');
        $this->form_validation->set_rules('cat_c1', 'Cat c1', 'trim|required');
        $this->form_validation->set_rules('cat_c2', 'Cat c2', 'trim|required');
        $this->form_validation->set_rules('cat_c3', 'Cat c3', 'trim|required');
        $this->form_validation->set_rules('cat_c4', 'Cat c4', 'trim|required');
        $this->form_validation->set_rules('self_employee1', 'Self Employee1', 'trim|required');

        $this->form_validation->set_rules('processing_fee1', 'Processing Fee1', 'trim|required');

        $this->form_validation->set_rules('tenure1', 'Tenure 1', 'trim|required');
        $this->form_validation->set_rules('preclosure_charge1', 'Pre-closure Charge1', 'trim|required');
    }
    
    public function EDIT_Personal_loan() {
        $id = $this->uri->segment(5);
        $this->_Edit_Personal_loan_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['salary1'] = $_POST['salary1'];
            $data['salary2'] = $_POST['salary2'];
            $data['salary3'] = $_POST['salary3'];
            $data['salary4'] = $_POST['salary4'];
            $data['cat_a1'] = $_POST['cat_a1'];
            $data['cat_a2'] = $_POST['cat_a2'];
            $data['cat_a3'] = $_POST['cat_a3'];
            $data['cat_a4'] = $_POST['cat_a4'];
            $data['cat_b1'] = $_POST['cat_b1'];
            $data['cat_b2'] = $_POST['cat_b2'];
            $data['cat_b3'] = $_POST['cat_b3'];
            $data['cat_b4'] = $_POST['cat_b4'];
            $data['cat_c1'] = $_POST['cat_c1'];
            $data['cat_c2'] = $_POST['cat_c2'];
            $data['cat_c3'] = $_POST['cat_c3'];
            $data['cat_c4'] = $_POST['cat_c4'];
            $data['self_employee1'] = $_POST['self_employee1'];
            $data['self_employee2'] = $_POST['self_employee2'];            
            $data['processing_fee1'] = $_POST['processing_fee1'];
            $data['processing_fee2'] = $_POST['processing_fee2'];            
            $data['tenure1'] = $_POST['tenure1'];            
            $data['preclosure_charge1'] = $_POST['preclosure_charge1'];
            
            if ($this->pls->Personal_Loan_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/personal_loan/personal_edit', $this->outputData);
    }

    public function Delete_Personal_Loan() {
        $id = $this->uri->segment(5);
        if ($this->pls->Personal_Loan_Deleteing($id)) {
            redirect('admin/PersonalLoan/Personal_Loan');
        } else {
            redirect('admin/PersonalLoan/Personal_Loan');
        }
        $this->load->view('admin/personal_loan/personalloan_view', $this->outputData);
    }

}
