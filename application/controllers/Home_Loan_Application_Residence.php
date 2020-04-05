<?php

class Home_Loan_Application_Residence extends Frontend_Controller {

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
            $data['a_permanent_address'] = $_POST['a_permanent_address'];
            $data['a_res_land'] = $_POST['a_res_land'];
            $data['a_mob'] = $_POST['a_mob'];
            $data['a_time'] = $_POST['a_time'];
            $data['a_timmings'] = $_POST['a_timmings'];
            $data['role'] = 'admin';
            $data['income_source_id'] = $_POST['income_source_id'];
            $data['a_dob'] = $_POST['a_dob'];
            
            $last_inserted_id = $this->p->generate_urc($data);
            $data['userData'] = $this->p->get_generate_urc_data($last_inserted_id);
            $result = $this->p->get_generate_urc_data($last_inserted_id);

            $dob = implode("/", (array) $result['a_dob']);
            $date_result = str_replace("/", "", $dob);
            
            $name = substr($result['applicant_name'], 0, 4);
            $date = rtrim($date_result, '0');
            $id = $result['generate_file_id'];
            $urc_code['urc_no'] = $name . $date . $id;
            $data['urc_code'] = $urc_code['urc_no'];
            $Update_URC = $this->p->update_generate_urc($urc_code, $id);
            $message = $this->load->view('On_submission_of_Application', $data, true);
            $message2 = $this->load->view('New_Application_Mail', $data, true);

            $messages = "Welcome to My loan Details for testing Message";            
            $url = 'http://www.smsjust.com/blank/sms/user/urlsms.php?' . http_build_query([
		'username' => 'myloan',
		'pass' => '123456',
		'senderid' => 'MyLoan',
		'dest_mobileno' => $data['a_mob'],
		'message' => $messages,
		'response' => 'Y'
		 ]);
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);

		$cust_email = $data['a_personal_email'];
                $static_email = "pixsellowebindia@gmail.com";

            if (sendEmail($data['a_personal_email'], 'Your Loan Application on Myloandetails.com', $message)) {
                if (sendEmail('pixsellowebindia@gmail.com', 'New Application CNDS', $message2)) {
                    $this->outputData['error'] = "URC Code is set to your mail cross check for further details";
                }
                $this->outputData['error'] = "URC Code is set to your mail cross check for further details";
            } else {
                $this->outputData['error'] = "Failed Generated URC";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-application_residence', $this->outputData);
    }

    public function selecting_bank() {
        $data = array();
        $data['bank_id'] = $_POST['selected_bank'];

        $this->outputData['result'] = $this->p->select_bank($data);
        echo json_encode($this->outputData['result']);
    }

    public function document_check() {
        $data = array();
        $data['income_source_id'] = $_POST['selected_income'];
        $data['bank_id'] = $_POST['selected_bank'];
        $data['loan_id'] = $_POST['selected_loan'];

        $loan_document_data = $this->p->get_checked_document($data);
        foreach ($loan_document_data as $loan_document_value) {
            //print_r($loan_document_value);
            $loan_id = $loan_document_value['loan_document_id'];
            $this->outputData['result'] = $this->p->get_checked_documents($loan_id);
        }
        echo json_encode($this->outputData['result']);
    }

}
