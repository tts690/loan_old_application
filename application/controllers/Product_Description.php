<?php

class Product_Description extends Frontend_Controller {
    
     public function __construct() {
        parent::__construct();
        $this->load->model('Product', 'pr');
    }
    
    public function index() {   
        $this->load->view('note-product-description-documents');
    }

    public function Get_products() {
        $data = array();
        $data['income_source_id'] = $_POST['income_source_id'];
        $data['sr_bank_id'] = $_POST['sr_bank_id'];
        $data['sr_loan_id'] = $_POST['sr_loan_id'];
        
        $result_data['data'] = $this->pr->get_all_product($data);
        $this->load->view('note-product-description_value', $result_data);
    }

}
