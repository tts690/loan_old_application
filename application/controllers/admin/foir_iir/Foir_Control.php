<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Foir_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Foir/Foirsetting', 'fs');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->fs->select_get_foir();
        $this->load->view('admin/foir/foir_view', $this->outputData);
    }

    private function _Creating_Foir() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_id', 'Bank Name', 'required|is_natural');
        $this->form_validation->set_rules('income_source_id', 'Income Source', 'required|alpha_numeric');
        //$this->form_validation->set_rules('liabilities', 'Liabilities', 'required|alpha_numeric');
        $this->form_validation->set_rules('from_amount', 'From', 'trim|required');
        $this->form_validation->set_rules('to_amount', 'To', 'trim|required');
        $this->form_validation->set_rules('percentage', 'Percentage', 'trim|required');
    }

    public function Create_Foir() {
        $this->_Creating_Foir();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_id'] = $_POST['bank_id'];
            $data['income_source_id'] = $_POST['income_source_id'];            
            $data['from_amount'] = $_POST['from_amount'];
            $data['to_amount'] = $_POST['to_amount'];
            $data['percentage'] = $_POST['percentage'];
            $data['liabilities'] = $_POST['liabilities'];
//            foreach($_POST['liabilities'] as $value){
//                 $data['liabilities'] = $value;
//            }
            
            if ($this->fs->Inserting_foir($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/foir/foir_create', $this->outputData);
    }

    private function _Edit_Foir_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bank_id', 'Bank Name', 'required|is_natural');
        $this->form_validation->set_rules('income_source_id', 'Income Source', 'required|alpha_numeric');
        //$this->form_validation->set_rules('liabilities', 'Liabilities', 'required|alpha_numeric');
        $this->form_validation->set_rules('from_amount', 'From', 'trim|required');
        $this->form_validation->set_rules('to_amount', 'To', 'trim|required');
        $this->form_validation->set_rules('percentage', 'Percentage', 'trim|required');
    }

    public function EDIT_Foir() {
        $id = $this->uri->segment(5);
        $this->_Edit_Foir_Validate();
        if ($this->form_validation->run() === TRUE) {
            $id = $_POST['editing_id'];
            $data = array();
            $data['bank_id'] = $_POST['bank_id'];
            $data['income_source_id'] = $_POST['income_source_id'];            
            $data['from_amount'] = $_POST['from_amount'];
            $data['to_amount'] = $_POST['to_amount'];
            $data['percentage'] = $_POST['percentage'];
            $data['liabilities'] = $_POST['liabilities'];
            
            if ($this->fs->Foir_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Edited';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/foir/foir_edit', $this->outputData);
    }

    public function Delete_Foir() {
        $id = $this->uri->segment(5);
        if ($this->fs->Foir_Delete($id)) {
            redirect('admin/foir_iir/Foir_Control');
        } else {
            redirect('admin/foir_iir/Foir_Control');
        }
        $this->load->view('admin/foir/foir_view', $this->outputData);
    }

}
