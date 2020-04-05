<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Login extends DSA_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('dsa/File_login', 'fl');
	if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
    }

    public function index() {    
        $this->load->view('dsa/login');
    }

    private function _Generate_URC_File() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('a_name', 'Applicant Name', 'trim|required');
    }

    public function Generate_URC_File() {
        $this->_Generate_URC_File();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_state_id'] = $_POST['state_id'];
            $data['cities_of_state_id'] = $_POST['selected_city'][0];
            $data['sr_bank_id'] = $_POST['selected_bank'][0];
            $data['sr_loan_id'] = $_POST['sr_loan_id'][0];
            
            $data['role'] = $_POST['role'];
            $data['income_source_id'] = $_POST['income_source_id'];
            
            $data['a_title'] = $_POST['a_title'];
            $data['co_title'] = $_POST['co_title'];
            $data['a_res_land'] = $_POST['a_res_land'];
            $data['co_res_land'] = $_POST['co_res_land'];
            $data['a_time'] = $_POST['a_time'];
            $data['co_time'] = $_POST['co_time'];
            $data['a_timmings'] = $_POST['a_timmings'];
            $data['co_timmings'] = $_POST['co_timmings'];            
            
            $data['emp_agn_name'] = $_POST['emp_agn_name'];
            $data['emp_agn_email'] = $_POST['emp_agn_email'];
            $data['emp_agn_mob'] = $_POST['emp_agn_mob'];
            
            $data['applicant_name'] = $_POST['a_name'];
            $data['co_applicant_name'] = $_POST['co_name'];
            
            $data['a_father_name'] = $_POST['a_fname'];
            $data['co_father_name'] = $_POST['co_fname'];
            
            $data['a_spouse_name'] = $_POST['a_sname'];
            $data['co_spouse_name'] = $_POST['co_sname'];
            
            $data['a_gender'] = $_POST['a_gender'];
            $data['co_gender'] = $_POST['co_gender'];
            
            $data['a_present_address'] = $_POST['a_present_address'];
            $data['co_present_address'] = $_POST['co_present_address'];
            
            $data['a_permanent_address'] = $_POST['a_permanent_address'];
            $data['co_permanent_address'] = $_POST['co_permanet_address'];
            
            $data['a_dob'] = $_POST['a_dob'];
            $data['co_dob'] = $_POST['co_dob'];
            
            $data['a_pan_number'] = $_POST['a_pan_no'];
            $data['co_pan_number'] = $_POST['co_pan_no'];
            
            $data['a_personal_email'] = $_POST['a_email'];
            $data['co_personal_email'] = $_POST['co_email'];
            
            $data['a_mob'] = $_POST['a_mob'];
            $data['co_mob'] = $_POST['co_mob'];
            
            $data['a_city'] = $_POST['a_city'];
            $data['co_city'] = $_POST['co_city'];            
            
            $data['a_adhar_no'] = $_POST['a_adhar'];
            $data['co_adhar_no'] = $_POST['co_adhar'];
            
            $data['a_employer_bussiness_name'] = $_POST['a_bussiness_name'];
            $data['co_employer_bussiness_name'] = $_POST['co_bussiness_name'];
            
            $data['a_employeer_address'] = $_POST['a_employeer_address'];
            $data['co_employeer_address'] = $_POST['co_employeer_address'];
            
            $data['a_office_phone'] = $_POST['a_office_no'];
            $data['co_office_phone'] = $_POST['co_office_no'];
            
            $data['a_office_email'] = $_POST['a_office_email'];
            $data['co_office_email'] = $_POST['co_office_email'];
            
            $data['a_hr_email'] = $_POST['a_hr_email'];
            $data['co_hr_email'] = $_POST['co_hr_email'];
            
            $data['property_address'] = $_POST['property_address'];
            $data['flat_plot_no'] = $_POST['flat_plot'];
            $data['area'] = $_POST['area'];
            $data['area_length'] = $_POST['area_details'];
            $data['seller_address'] = $_POST['seller_address'];
            $data['constructed_area'] = $_POST['constructed_area'];
            $data['constructed_area_length'] = $_POST['constructed_area_details'];
            $data['property_cost'] = $_POST['property_cost'];
            $data['loan_amount'] = $_POST['loan_amount'];
            $data['tenure'] = $_POST['tenure'];
            $data['interest_rate'] = $_POST['interest_rate'];
            $data['processing_fee'] = $_POST['processing_fee'];
            $data['cheque_no'] = $_POST['cheque_no'];
            $data['bank_name'] = $_POST['bank_name'];
            $data['branch_name'] = $_POST['branch_name'];

            $last_inserted_id = $this->fl->generate_urc($data);
            $result = $this->fl->get_generate_urc_data($last_inserted_id);
            
            $dob = implode("/", (array) $result['a_dob']);
            $date_result = str_replace("/", "", $dob);
            $name = substr($result['applicant_name'], 0, 4);
            $date = rtrim($date_result, '0');
            $id = $result['generate_file_id'];
            $urc_code['urc_no'] = $name.$date.$id;
            
            $this->fl->update_generate_urc($urc_code,$id);
            
            $result_data  = $this->fl->get_generate_urc_data($last_inserted_id);
            
            $urc_generated_update['generate_file_id'] = $result_data['generate_file_id'];
            $urc_generated_update['role'] = $data['role'];
            
            $insert_file_generate_details_id = $this->fl->insert_file_generate_details($urc_generated_update);
            $insert_file_generate_details_id = $this->fl->insert_disbursment_document($urc_generated_update);
            $insert_file_disbursment_details_id = $this->fl->insert_file_disbursment_details($urc_generated_update);
            
            $datas['userData'] = $result_data;
//            echo "<pre>";
//            print_r($datas);
//            echo "</pre>";
//            die();
            
            $message = $this->load->view('URC_Sending_Mail', $datas, true);
            $message2 = $this->load->view('New_Application_Mail', $datas, true);
            
            $message1 = "Welcome to My loan Details for testing Message";
            $url = 'http://www.smsjust.com/blank/sms/user/urlsms.php?' . http_build_query([
		'username' => 'myloan',
		'pass' => '123456',
		'senderid' => 'MyLoan',
		'dest_mobileno' => $data['a_mob'],
		'message' => $message1,
		'response' => 'Y'
		 ]);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch); 
                
            $static_email = 'pixsellowebindia@gmail.com';
            
            
            if (sendEmail($result_data['a_personal_email'], 'Your Application URC Code Myloandetails.com', $message)) {
                if (sendEmail('pixsellowebindia@gmail.com', 'New Application CNDS', $message2)) {
                    $this->outputData['error'] = "URC Code is set to your mail cross check for further details";
                }

            } else {
                $this->outputData['error'] = "Failed Generated URC";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('dsa/login', $this->outputData);
    }

    public function Select_File_Process_Status() {
        $this->outputData['result'] = $this->fl->get_file_status_process($_POST['process_id']);
        echo json_encode($this->outputData);
    }
    
    public function Select_Eligibality_Status() {
        $this->outputData['result'] = $this->fl->get_file_status_process($_POST['process_id']);
        echo json_encode($this->outputData);
    }
    
    public function Select_Legal_Status() {
        $this->outputData['result'] = $this->fl->get_file_status_process($_POST['process_id']);
        echo json_encode($this->outputData);
    }
}
