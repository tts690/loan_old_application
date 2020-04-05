<?php

class Search extends DSA_Controller {

    public function __construct() {
        parent::__construct();
	if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
        $this->load->model('dsa/Setting_search', 'ess');
    }

    public function index() {
        $this->outputData['data'] = $this->ess->select_cust_details();
        $this->load->view('dsa/Disbursment_search/search', $this->outputData);
    }

    public function EDIT_file() {
        $data = array();
        $id = $_POST['editing_id'];
        $data['applicant_name'] = $_POST['applicant_name'];
        $data['co_applicant_name'] = $_POST['co_applicant_name'];
        $data['a_office_phone'] = $_POST['a_office_phone'];
        $data['a_personal_email'] = $_POST['a_personal_email'];
        $data['loan_amount'] = $_POST['loan_amount'];
        $data['a_city'] = $_POST['a_city'];
        $data['role'] = $_POST['role'];

        if ($this->ess->disbursement_Editing($data, $id)) {
            $this->outputData['error'] = 'Successfully Your Query is Created';
        } else {
            $this->outputData['error'] = 'Failed To Insert';
        }
        $this->load->view('dsa/Disbursment_search/edit_disbursement_search', $this->outputData);
    }

}
