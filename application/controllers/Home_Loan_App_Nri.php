<?php

/**
 * Description of home_loan_app_res
 *
 * @author HemanthRaj
 */
class Home_Loan_App_Nri extends Frontend_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Product', 'p');
    }

    private function _Generate_URC_File() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('a_name', 'Applicant Name', 'trim|required');
    }

    function index() {
        $this->_Generate_URC_File();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_state_id'] = $_POST['state_id'];
            $data['cities_of_state_id'] = $_POST['selected_city'][0];
            $data['sr_bank_id'] = $_POST['selected_bank'][0];
            $data['sr_loan_id'] = $_POST['sr_loan_id'][0];
            $data['loan_amount'] = $_POST['loan_amount'];
            $data['a_title'] = $_POST['a_title'];
            $data['applicant_name'] = $_POST['a_name'];
            $data['a_mob'] = $_POST['a_mob'];
            $data['a_personal_email'] = $_POST['a_email'];
            $data['a_city'] = $_POST['a_city'];
            $data['a_country'] = $_POST['a_country'];
            $data['local_contact_name'] = $_POST['local_contact_name'];
            $data['a_permanent_address'] = $_POST['a_permanent_address'];
            $data['a_res_land'] = $_POST['a_res_land'];
            $data['a_mob'] = $_POST['a_mob'];
            $data['a_time'] = $_POST['a_time'];
            $data['a_timmings'] = $_POST['a_timmings'];
            $data['role'] = 'admin';
            $data['income_source_id'] = 'N';
            $data['a_dob'] = $_POST['a_dob'];            
            $data['generate_file_id'] = $_POST['generate_file_id'];
            
            $this->p->update_generate($data);
            $email_id = $data['a_personal_email'];	
            $message = $this->load->view('On_submission_of_Application', $data, true);
            
            if (sendEmail($email_id, 'Your Loan Application on Myloandetails.com', $message)) {
                $this->outputData['error'] = "Successfully your application is updated";
            } else {
                $this->outputData['error'] = "Failed Generated URC";
            }
            
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-application_nri_salaried_1', $this->outputData);
    }
}
