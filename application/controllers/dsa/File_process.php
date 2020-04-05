<?php

class File_process extends DSA_Controller {

    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
        $this->load->model('dsa/Setting_file_process', 'sfp');
    }

    public function Select_File_Process_URC() {
        $this->outputData['result'] = $this->sfp->get_file_process_urc($_POST['income_source']);
        echo json_encode($this->outputData);
    }

    public function Select_File_Process_Verification() {
        $this->outputData['result'] = $this->sfp->get_file_process_verification($_POST['income_source']);
        echo json_encode($this->outputData);
    }

    public function Select_File_Process_Verification_process() {
        $this->outputData['result'] = $this->sfp->get_file_process_verification_process_id($_POST['process_id']);
        echo json_encode($this->outputData);
    }

    private function _Filling_Process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('app_remarks', 'Applicant Remarks', 'trim|required');
    }

    public function index() {
        $this->_Filling_Process();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['role'] = $_POST['role'];
            $data['generate_file_id'] = $_POST['generate_file_id'];
            $data['income_source_id'] = $_POST['income_source'];
            $data['app_process_process_type_id'] = $_POST['app_process_process_type_id'];
            $data['co_process_process_type_id'] = $_POST['co_process_process_type_id'];
            $data['file_process_app_status'] = $_POST['file_process_app_status'];
            $data['file_process_co_status'] = $_POST['file_process_co_status'];
            $data['app_remarks'] = $_POST['app_remarks'];
            $data['co_remarks'] = $_POST['co_remarks'];
            $data['eli_app_process_type_process_id'] = $_POST['eli_app_process_type_process_id'];
            $data['eli_co_process_type_process_id'] = $_POST['eli_co_process_type_process_id'];
            $data['eli_file_process_app_status'] = $_POST['eli_file_process_app_status'];
            $data['eli_file_process_co_status'] = $_POST['eli_file_process_co_status'];
            $data['eli_app_remarks'] = $_POST['eli_app_remarks'];
            $data['eli_co_remarks'] = $_POST['eli_co_remarks'];
            $data['eli_app_amount'] = $_POST['eli_app_amount'];
            $data['eli_co_amount'] = $_POST['eli_co_amount'];
            $data['leg_app_process_type_process_id'] = $_POST['leg_app_process_type_process_id'];
            $data['leg_co_process_type_process_id'] = $_POST['leg_co_process_type_process_id'];
            $data['leg_file_process_app_status'] = $_POST['leg_file_process_app_status'];
            $data['leg_file_process_co_status'] = $_POST['leg_file_process_co_status'];
            $data['leg_app_remarks'] = $_POST['leg_app_remarks'];
            $data['leg_co_remarks'] = $_POST['leg_co_remarks'];
            $data['leg_app_amount'] = $_POST['leg_app_amount'];
            $data['leg_co_amount'] = $_POST['leg_co_amount'];
            
            $this->sfp->update_generate_details($data);
            $last_inserted_id = $data['generate_file_id'];
            $result = $this->sfp->get_generate_details($last_inserted_id);
            $datas['userData'] = $result[0];
            $message = $this->load->view('Sending_Regular_Update_of_File_Status_when_Edited', $datas, true);
            
            $message1 = "Welcome to My loan Details for testing Message";
            $url = 'http://www.smsjust.com/blank/sms/user/urlsms.php?' . http_build_query([
		'username' => 'myloan',
		'pass' => '123456',
		'senderid' => 'MyLoan',
		'dest_mobileno' => $result[0]->a_mob,
		'message' => $message1,
		'response' => 'Y'
		 ]);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
      
            if (!sendEmail($result[0]->a_personal_email, 'Your Loan Application Status Myloandetails.com', $message)) {
                $this->outputData['error'] = "Successfully mail sent";
            } else {
                $this->outputData['error'] = "Failed File Process";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('dsa/file_process', $this->outputData);
    }
}
