<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class File_Status_Master_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/manage_file_status_master/File_status_master_settings', 'fss');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->fss->select_get_file();
        $this->load->view('admin/file_status_master/file_status_view',$this->outputData);
    }

    private function _Creating_File() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('file_name', 'File Status Name', 'trim|required');
    }

    public function create_file() {
     $this->_Creating_File();
        
        if ($this->form_validation->run() === TRUE) {
        
            $data = array();
            $data['file_status_name'] = $_POST['file_name'];

            if ($this->fss->Inserting_file($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/file_status_master/file_status_create',$this->outputData);
    }
    
    private function _Edit_File_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('file_name', 'File Status Name', 'trim|required');
    }

    public function EDIT_File() {
        $id = $this->uri->segment(5);
        $this->_Edit_File_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['file_status_name'] = $_POST['file_name'];

            if ($this->fss->File_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/file_status_master/file_status_edit', $this->outputData);
    }

    public function Delete_File() {

        $id = $this->uri->segment(5);
        if ($this->fss->File_Delete($id)) {
            redirect('admin/manage_file_status_master/File_Status_Master_Control');
        } else {
            redirect('admin/manage_file_status_master/File_Status_Master_Control');
        }
        $this->load->view('admin/file_status_master/File_Status_view', $this->outputData);
    }    
    
    public function Process() {
        $this->outputData['data'] = $this->fss->select_get_process();
        $this->load->view('admin/process_master/process_view',$this->outputData);
    }
    
    private function _Creating_Process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('process_name', 'Process Name', 'trim|required');
    }
    public function Create_Process() {
        $this->_Creating_Process();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['process_name'] = $_POST['process_name'];

            if ($this->fss->Inserting_process($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/process_master/process_create', $this->outputData);
    }
    
    private function _Edit_Process_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('process_name', 'File Status Name', 'trim|required');
    }

    public function EDIT_Process() {
        $id = $this->uri->segment(5);
        $this->_Edit_Process_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['process_name'] = $_POST['process_name'];

            if ($this->fss->Process_Editing($data, $id)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/process_master/process_edit', $this->outputData);
    }

    public function Delete_Process() {
        $id = $this->uri->segment(5);
        if ($this->fss->Delete_Process($id)) {
            redirect('admin/manage_file_status_master/File_Status_Master_Control/Process');
        } else {
            redirect('admin/manage_file_status_master/File_Status_Master_Control/Process');
        }
        $this->load->view('admin/process_master/process_view', $this->outputData);
    }    

}
