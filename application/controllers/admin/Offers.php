<?php

/**
 * Description of Test
 *
 * @author HemanthRaj
 */
class Offers extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/offer/Offersetting', 'ofs');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
       $this->outputData['data'] = $this->ofs->select_get_offer();
        $this->load->view('admin/offers/offer_view', $this->outputData);
    }
    
    private function _Offer_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('offer_name', 'Offer Name', 'trim|required');
    }
    
    public function Create_Offer() {
        $this->_Offer_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['offer_name'] = ucfirst($_POST['offer_name']);
                        
            if ($this->ofs->Manage_Offer_Create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/offers/offer_create', $this->outputData);
    }
    
    private function _Edit_Offer_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('offer_name', 'Offer Name', 'trim|required');     
    }

    public function EDIT_Offer() {
        $this->_Edit_Offer_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['offer_id'] = $_POST['editing_id'];
            $data['offer_name'] = $_POST['offer_name'];           

            if ($this->ofs->Offer_Editing($data)) {
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/offers/offer_edit', $this->outputData);
    }
    
    public function Delete_Offer(){
        $id = $this->uri->segment(4);        
        if ($this->ofs->Offer_Delete($id)) {
            redirect('admin/Offers');
        } else {
            redirect('admin/Offers');
        }
        $this->load->view('admin/offers/offer_view', $this->outputData);
    }

}
