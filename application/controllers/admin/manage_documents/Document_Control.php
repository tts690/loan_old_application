<?php
/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Document_Control extends Admin_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Documents/Documentssettings', 'ds');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ds->select_get_Documents();
        $this->load->view('admin/manage_documents/manage_documents_view', $this->outputData);
    }    
    
    private function _Manage_Documents_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('doc_code', 'Documents Code', 'trim|required');
        $this->form_validation->set_rules('doc_name', 'Documents Name', 'trim|required');
        $this->form_validation->set_rules('income_source', 'Documents For', 'trim|required');
    }

    public function Create_Manage_Documents() {
        $this->_Manage_Documents_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['doc_code'] = $_POST['doc_code'];
            $data['doc_name'] = $_POST['doc_name'];
            $data['income_source'] = $_POST['income_source'];
            
            if ($this->ds->Manage_Document_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_documents/documents_create', $this->outputData);
    }
    
    
     private function _Edit_Documents_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('doc_code', 'Documents Code', 'trim|required');
        $this->form_validation->set_rules('doc_name', 'Documents Name', 'trim|required');
    }

    public function EDIT_Documents() {
        $this->_Edit_Documents_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['id'] = $_POST['editing_id'];
            $data['doc_code'] = $_POST['doc_code'];
            $data['doc_name'] = $_POST['doc_name'];            

            if ($this->ds->documents_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_documents/documents_edit', $this->outputData);
    }
    
    public function Delete_Documents(){
        $id = $this->uri->segment(5);        
        if ($this->ds->Documents_Delete($id)) {
            redirect('admin/manage_documents/Document_Control');
        } else {
            redirect('admin/manage_documents/Document_Control');
        }
        $this->load->view('admin/manage_documents/manage_documents_view', $this->outputData);
    }
}
