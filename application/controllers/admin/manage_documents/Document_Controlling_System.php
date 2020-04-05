<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Document_Controlling_System extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Documents/Documents_controlling_settings', 'amd');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/manage_documents_Controlling_System/documents_Controlling_System_create');
    }

    public function document_control_system() {
        $data = array();
        $data['income_source'] = $_POST['income_source_value'];
        $this->outputData['data'] = $this->amd->select_get_Documents_data($data);
        echo json_encode($this->outputData['data']);
    }

    public function selecting_bank() {
        $data = array();
        $data['bank_id'] = $_POST['selected_bank'];
        $this->outputData['result'] = $this->amd->select_bank($data);
        echo json_encode($this->outputData['result']);
    }

    public function save_documents() {
        $data = array();
        $data['income_source_id'] = $_POST['income_source'];
        $data['bank_id'] = $_POST['selected_bank'];
        foreach ($_POST['selected_loan'] as $value) {
            $data['loan_id'] = $value;
        }
        $loan_document_id = $this->amd->insert_loan_documents($data);

        foreach ($_POST['selectall'] as $value) {
            $data = array();
            $data['document_id'] = $value;
            $data['loan_document_id'] = $loan_document_id;
            if ($this->amd->insert_loan_documents_list($data)) {
                $this->outputData['error'] = "Successfully Inserted";
            } else {
                $this->outputData['error'] = "Failed To Inserted";
            }
        }
        $this->load->view('admin/manage_documents_Controlling_System/documents_Controlling_System_create', $this->outputData);
    }
    
    public function document_check(){
        $data = array();
        $data['income_source_id'] = $_POST['selected_income'];
        $data['bank_id'] = $_POST['selected_bank'];
        $data['loan_id'] = $_POST['selected_loan'];
        
        $loan_document_data = $this->amd->get_checked_document($data);
        foreach($loan_document_data as $loan_document_value){
            //print_r($loan_document_value);
            $loan_id = $loan_document_value['loan_document_id'];
            $this->outputData['result'] = $this->amd->get_checked_documents($loan_id);
        }
        echo json_encode($this->outputData['result']);
    }
}
