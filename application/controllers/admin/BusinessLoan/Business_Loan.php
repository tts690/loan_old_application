<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Business_Loan extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/bussiness_loan/Bussiness_loan_setting', 'bls');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->bls->select_get_bussiness_loan_data();
        $this->load->view('admin/business_loan/bussinessloan_view', $this->outputData);
    }

    private function _Creating_Business_Loan() {
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('bussiness_loan_bank_id', 'Bank Name', 'required|is_natural');
        $this->form_validation->set_rules('turn_over', 'Turn Over', 'trim|required');
        $this->form_validation->set_rules('profit', 'Profit', 'trim|required');
        $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'trim|required');
        $this->form_validation->set_rules('irr', 'IRR', 'trim|required');
        $this->form_validation->set_rules('min_exp', 'Minimum Experience', 'trim|required');
        $this->form_validation->set_rules('age', 'Age', 'trim|required');
        $this->form_validation->set_rules('own_house_office', 'own House Office', 'trim|required');
        $this->form_validation->set_rules('insurance', 'Insurance', 'trim|required');
        $this->form_validation->set_rules('pf', 'PF', 'trim|required');     
    }

    public function Create_Business_Loan() {
        $this->_Creating_Business_Loan();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bussiness_loan_bank_id'] = $_POST['bussiness_loan_bank_id'];
            $data['turn_over'] = $_POST['turn_over'];
            $data['profit'] = $_POST['profit'];
            $data['loan_amount'] = $_POST['loan_amount'];
            $data['irr'] = $_POST['irr'];
            $data['min_exp'] = $_POST['min_exp'];
            $data['age'] = $_POST['age'];
            $data['own_house_office'] = $_POST['own_house_office'];
            $data['insurance'] = $_POST['insurance'];
            $data['pf'] = $_POST['pf'];
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
            if ($this->bls->Inserting_business_loan($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/business_loan/bussiness_loan_create', $this->outputData);
    }
    
    private function _Edit_Business_loan_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('turn_over', 'Turn Over', 'trim|required');
        $this->form_validation->set_rules('profit', 'Profit', 'trim|required');
        $this->form_validation->set_rules('loan_amount', 'Loan Amount', 'trim|required');
        $this->form_validation->set_rules('irr', 'IRR', 'trim|required');
        $this->form_validation->set_rules('min_exp', 'Minimum Experience', 'trim|required');
        $this->form_validation->set_rules('age', 'Age', 'trim|required');
        $this->form_validation->set_rules('own_house_office', 'own House Office', 'trim|required');
        $this->form_validation->set_rules('insurance', 'Insurance', 'trim|required');
        $this->form_validation->set_rules('pf', 'PF', 'trim|required');     
    }
    
    public function EDIT_Bussiness_loan() {
        $id = $this->uri->segment(5);
        $this->_Edit_Business_loan_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['turn_over'] = $_POST['turn_over'];
            $data['profit'] = $_POST['profit'];
            $data['loan_amount'] = $_POST['loan_amount'];
            $data['irr'] = $_POST['irr'];
            $data['min_exp'] = $_POST['min_exp'];
            $data['age'] = $_POST['age'];
            $data['own_house_office'] = $_POST['own_house_office'];
            $data['insurance'] = $_POST['insurance'];
            $data['pf'] = $_POST['pf'];
            
            if ($this->bls->Business_Loan_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/business_loan/bussiness_edit', $this->outputData);
    }

    public function Delete_Bussiness_Loan() {
        $id = $this->uri->segment(5);
        if ($this->bls->business_Loan_Deleteing($id)) {
            redirect('admin/BusinessLoan/Business_Loan');
        } else {
            redirect('admin/BusinessLoan/Business_Loan');
        }
        $this->load->view('admin/business_loan/bussinessloan_view', $this->outputData);
    }

}
