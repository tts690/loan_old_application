<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Product_Description_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Productdescription_Settings/Product_description_setting', 'pds');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->pds->select_get_product();
        $this->load->view('admin/productdescriptionsettings/productdescriptionview', $this->outputData);
    }

    public function Get_Product_Loan() {
        $bank_id = $_POST['bank_id'];
        $this->outputData['data'] = $this->pds->select_get_loan_name($bank_id);
        echo json_encode($this->outputData['data']);
    }

    private function _Creating_Product() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('income_source', 'Income Source', 'trim|required');
        $this->form_validation->set_rules('bank_id', 'Bank Name', 'trim|required');
        $this->form_validation->set_rules('processing_fee', 'Processing Fee', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('sanction', 'Sanction', 'trim|required');
        $this->form_validation->set_rules('legal', 'Legal', 'trim|required');
        $this->form_validation->set_rules('disbursement', 'Disbursement', 'trim|required');
        $this->form_validation->set_rules('closure', 'Closure', 'trim|required');
    }

    public function Create_Product() {
        $this->_Creating_Product();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['income_source_id'] = $_POST['income_source'];
            $data['sr_bank_id'] = $_POST['bank_id'];
            $data['sr_loan_id'] = $_POST['selected_loan'];
            $data['adminprocessingfee'] = $_POST['processing_fee'];
            $data['description'] = $_POST['description'];
            $data['sanction_conditions'] = $_POST['sanction'];
            $data['legal_technical'] = $_POST['legal'];
            $data['disbursement'] = $_POST['disbursement'];
            $data['pre_closure'] = $_POST['closure'];
            foreach ($_POST['selected_loan'] as $value) {
                $data['sr_loan_id'] = $value;
                if ($this->pds->Inserting_Product($data)) {
                    $this->outputData['error'] = 'Successfully Your Query is Created';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/productdescriptionsettings/product_description_create', $this->outputData);
    }

    public function Create_Manage_ProductView() {
        //$this->_Manage_City_Create_Validate();
//        if ($this->form_validation->run() === TRUE) {
//            $data = array();
//            $data['sr_state_id'] = $_POST['state_id'];
//            $data['city_name'] = $_POST['City_Name'];
//
//            if ($this->cs->Manage_City_Create($data)) {
//                $this->outputData['error'] = 'Successfully Your Query is Created';
//            } else {
//                $this->outputData['error'] = 'Failed To Insert';
//            }
//        } else {
//            $this->outputData['error'] = validation_errors();
//        }
        $this->load->view('admin/productdescriptionsettings/product_description_create');
    }

    private function _Edit_Product_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('income_source', 'Income Source', 'trim|required');
        $this->form_validation->set_rules('bank_id', 'Bank Name', 'trim|required');
        $this->form_validation->set_rules('processing_fee', 'Processing Fee', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        $this->form_validation->set_rules('sanction', 'Sanction', 'trim|required');
        $this->form_validation->set_rules('legal', 'Legal', 'trim|required');
        $this->form_validation->set_rules('disbursement', 'Disbursement', 'trim|required');
        $this->form_validation->set_rules('closure', 'Closure', 'trim|required');
    }

    public function EDIT_Product() {
        $id = $this->uri->segment(5);
        $this->_Edit_Product_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['income_source_id'] = $_POST['income_source'];
            $data['sr_bank_id'] = $_POST['bank_id'];
            $data['sr_loan_id'] = $_POST['selected_loan'];
            $data['adminprocessingfee'] = $_POST['processing_fee'];
            $data['description'] = $_POST['description'];
            $data['sanction_conditions'] = $_POST['sanction'];
            $data['legal_technical'] = $_POST['legal'];
            $data['disbursement'] = $_POST['disbursement'];
            $data['pre_closure'] = $_POST['closure'];
            
            foreach ($_POST['selected_loan'] as $value) {
                $data['sr_loan_id'] = $value;
                if ($this->pds->Product_Editing($data,$id)) {
                    $this->outputData['error'] = 'Successfully Your Query is Created';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/productdescriptionsettings/product_description_edit', $this->outputData);
    }

    public function Delete_Product() {
        $id = $this->uri->segment(5);
        if ($this->pds->Product_Delete($id)) {
            redirect('admin/product_description/Product_Description_Control');
        } else {
            redirect('admin/product_description/Product_Description_Control');
        }
        $this->load->view('admin/productdescriptionsettings/productdescriptionview', $this->outputData);
    }

}
