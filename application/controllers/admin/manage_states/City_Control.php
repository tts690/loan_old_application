<?php
/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class City_Control extends Admin_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_States/Citysettings', 'cs');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->cs->select_get_city();
        $this->load->view('admin/manage_city/manage_city_view', $this->outputData);
    }    
    
    private function _Manage_City_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('state_id', 'State Name', 'trim|required');
        $this->form_validation->set_rules('City_Name', 'City Name', 'trim|required');        
    }

    public function Create_Manage_City() {
        $this->_Manage_City_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();            
            $data['sr_state_id'] = $_POST['state_id'];
            $data['city_name'] = $_POST['City_Name'];
            
            if ($this->cs->Manage_City_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_city/city_create', $this->outputData);
    }
    
    
     private function _Edit_City_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('city_name', 'City Name', 'trim|required');        
    }

    public function EDIT_City() {
        $this->_Edit_City_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['cities_of_state_id'] = $_POST['editing_id'];
            $data['city_name'] = $_POST['city_name'];            

            if ($this->cs->City_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_city/city_edit', $this->outputData);
    }
    
    public function Delete_City(){
        $id = $this->uri->segment(5);        
        if ($this->cs->City_Delete($id)) {
            redirect('admin/manage_states/City_Control');
        } else {
            redirect('admin/manage_states/City_Control');
        }
        $this->load->view('admin/manage_states/manage_states_view', $this->outputData);
    }
}
