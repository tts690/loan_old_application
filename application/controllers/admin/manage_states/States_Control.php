<?php
/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class States_Control extends Admin_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_States/Statesettings', 'ss');
 if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }

    }

    public function index() {
        $this->outputData['data'] = $this->ss->select_get_states();
        $this->load->view('admin/manage_states/manage_states_view', $this->outputData);
    }    
    
    private function _Manage_State_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('State_Name', 'State Name', 'trim|required');
    }

    public function Create_Manage_States() {
        $this->_Manage_State_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();            
            $data['state_name'] = $_POST['State_Name'];
            
            if ($this->ss->Manage_States_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_states/states_create', $this->outputData);
    }
    
    
     private function _Edit_State_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('state_name', 'State Name', 'trim|required');        
    }

    public function EDIT_States() {
        $this->_Edit_State_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['id'] = $_POST['editing_id'];
            $data['state_name'] = $_POST['state_name'];            

            if ($this->ss->State_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_states/states_edit', $this->outputData);
    }
    
    public function Delete_States(){
        $id = $this->uri->segment(5);        
        if ($this->ss->State_Delete($id)) {
            redirect('admin/manage_states/States_Control');
        } else {
            redirect('admin/manage_states/States_Control');
        }
        $this->load->view('admin/manage_states/manage_states_view', $this->outputData);
    }
}
