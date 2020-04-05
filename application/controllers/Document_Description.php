<?php

class Document_Description extends Frontend_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Document', 'doc');
    }
    
    function index() {
        $this->load->view('home-loan-required-documents');
    }
    
     public function Get_Documents() {
        $data = array();
        $data['income_source_id'] = $_POST['income_source_id'];
        $data['bank_id'] = $_POST['sr_bank_id'];
        $data['loan_id'] = $_POST['sr_loan_id'];
        
        $result_data['data'] = $this->doc->get_all_documents($data);
        $this->load->view('note-document-description-value', $result_data);
    }
}
