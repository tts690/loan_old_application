<?php

/**
 * Description of State_Bank
 *
 * @author HemanthRaj
 */
class State_Bank extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_States/State_bank_settings', 'sbs');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->sbs->select_state();
        $this->load->view('admin/manage_states_bank/states_bank_create', $this->outputData);
    }
    
    public function Selecting_State_Bank(){
        $state_id = $this->input->post('state_id');
        $result = $this->sbs->select_state_bank($state_id);
        echo json_encode($result);
    }

    private function _Manage_State_Bank_Control_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('state_id', 'State Name', 'trim|required');
        //$this->form_validation->set_rules('selectall', 'Income Source', 'trim|required');        
    }

    public function Create_State_Bank_Controlling() {
        $this->_Manage_State_Bank_Control_Validate();
        if ($this->form_validation->run() === TRUE) {

            $data = array();
            $data['sr_state_id'] = $_POST['state_id'];
            $data['income_source_id'] = $_POST['selectall'];
            
            if($data['income_source_id'][0] == "on"){
                unset($data['income_source_id'][0]);
            }

            foreach ($data['income_source_id'] as $value) {
                $data['income_source_id'] = $value;
                $state_id = $data['sr_state_id'];
                $result = $this->sbs->select_state_bank($state_id);
                $state_bank_id_1 = $result[0]->state_banks_id;
                $state_bank_id_2 = $result[1]->state_banks_id;

                if($state_bank_id_1 ==  TRUE){
                    $this->sbs->update_state_bank($state_id);
                }
                
                $income_source_id_1 = $result[0]->income_source_id;
                $income_source_id_2 = $result[1]->income_source_id;
                
                //if($income_source_id_1 = 1){
                    if ($this->sbs->Manage_Bank_State_Wise($data)) {
                        $this->outputData['error'] = 'Successfully Your Query is Created';
                    } else {
                        $this->outputData['error'] = 'Failed To Insert';
                    }
                //}else{
                  //  $this->outputData['error'] = 'uncheck which is already selected';
                //}
                
//                if($income_source_id_2 = 2){
//                    if ($this->sbs->Manage_Bank_State_Wise($data)) {
//                        $this->outputData['error'] = 'Successfully Your Query is Created';
//                    } else {
//                        $this->outputData['error'] = 'Failed To Insert';
//                    }
//                }else{
//                    $this->outputData['error'] = 'uncheck which is already selected';
//                }
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/manage_states_bank/states_bank_create', $this->outputData);
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

    public function Delete_City() {
        $id = $this->uri->segment(5);
        if ($this->cs->City_Delete($id)) {
            redirect('admin/manage_states/City_Control');
        } else {
            redirect('admin/manage_states/City_Control');
        }
        $this->load->view('admin/manage_states/manage_states_view', $this->outputData);
    }

}
