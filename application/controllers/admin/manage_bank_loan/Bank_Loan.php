<?php

/**
 * Description of bank_loan
 *
 * @author HemanthRaj
 */
class Bank_Loan extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Loans/Loansettings', 'ls');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }
    
     public function index() {
        $this->outputData['sr_bank_result'] = $this->ls->select_all_sr_bank();
        $this->outputData['sr_loan_result'] = $this->ls->select_get_loans();
        $this->load->view('admin/manage_bank_loan/bankloan', $this->outputData);
    }
    
    private function _Create_Bank_Loan_Validate(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('income_source_id', 'Bank', 'trim|required');
        $this->form_validation->set_rules('loan_id', 'Loan', 'trim|required');
    }
    
    public function create_bank_loan(){
         $this->_Create_Bank_Loan_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_id'] = $_POST['income_source_id'];
            $data['loan_id'] = $_POST['loan_id'];
            $data['res_min_interest'] = $_POST['res_min'];
            $data['res_max_interest'] = $_POST['res_max'];
            $data['res_max_tenure'] = $_POST['res_tenure'];
            $data['add_bank_it'] = $_POST['res_addbank'];
            $data['nri_min_interest'] = $_POST['nri_min'];
            $data['nri_max_interest'] = $_POST['nri_max'];
            $data['nri_max_tenure'] = $_POST['nri_tenure'];
            $data['applicable_to_nri'] = $_POST['nri_app'];
            if($_POST['nri_app']){
                $data['applicable_to_nri'] = $_POST['nri_app'] ="False";
            }else{
                $data['applicable_to_nri'] =  $_POST['nri_app'] = "True";
           }
            if ($this->ls->creating_bank_loan($data)) {
                $this->outputData['error'] = 'Successfully Bank Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_bank_loan/bankloan', $this->outputData);
    }
    
    public function create_bank(){
        $arraydata = array();
        $arraydata['bank_id'] = $this->input->post('bank_id');
        
        //print_r($data['faq_id']);die;
        $result = $this->ls->Get_All_Information($arraydata); 
        echo json_encode($result); 
        exit;
        
       // print_r($value);
        
        //die();
//        $result = array(
//            'review' => $this->input->post('id'),
//            'rating' => $this->input->post('text')
//        );
      
//        echo json_encode($value);
//        exit;
    }
    
    public function remove_bank(){
        $id = $this->uri->segment(5);
        $deleted_result = $this->ls->Remove_Bank($id); 
        redirect('admin/manage_bank_loan/Bank_Loan');
    }

}
