<?php

class Dsa_Login extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('DSA_Settings', 'dsa');
    }

    public function index() {
        $this->load->view('dsa_login');
    }

    public function Get_State_City() {
        $state_id = $_POST['selected_state'];
        $this->outputData['state_name'] = $this->dsa->select_get_state_city($state_id);
        $this->outputData['bank_name'] = $this->dsa->select_get_state_bank($state_id);
        //print_r($this->outputData);
        //die();
        echo json_encode($this->outputData);
    }

    private function _Creating_Agency() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('agency_name', 'Agency Name', 'trim|required');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('contact_name', 'Contact Name', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required');
    }

    public function Create_Agency() {
        $this->_Creating_Agency();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_state_id'] = $_POST['state_id'];
            $data['cities_of_state_id'] = $_POST['selected_city'][0];
            $data['bank_id'] = $_POST['selected_bank'][0];
            $data['agency_name'] = $_POST['agency_name'];
            $data['agency_address'] = $_POST['address'];
            $data['contact_person'] = $_POST['contact_name'];
            $data['phone'] = $_POST['phone'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['sms_approve'] = $_POST['sms_approve'];
            $data['email_approve'] = $_POST['email_approve'];
            $data['bank_id'] = $_POST['selected_bank'][0];
            $data['cities_of_state_id'] = $_POST['selected_city'][0];
            $data['status'] = 0;

            if ($_POST['password'] == $_POST['cpassword']) {

                $agency_id = $this->dsa->Inserting_agency($data);
                
                $dsa_result['res'] = $this->dsa->check_dsa_idd($agency_id);
                
                $data['userData'] = $dsa_result['res'][0];
                $dsa_result['res'][0]['email'];
                $message = $this->load->view('DSA_Account_Signup_Email_Confirmation', $data, true);

                $result = $this->dsa->Inserting_agency_profile($agency_id);
		$cust_email = $dsa_result['res'][0]['email'];
                $static_email = 'pixsello.webapp@gmail.com';
                
                
                $message1 = "Welcome to My loan Details for testing Message";
                $url = 'http://www.smsjust.com/blank/sms/user/urlsms.php?' . http_build_query([
		'username' => 'myloan',
		'pass' => '123456',
		'senderid' => 'MyLoan',
		'dest_mobileno' => $data['phone'],
		'message' => $message1,
		'response' => 'Y'
		 ]);

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch); 

                if (!sendEmail($dsa_result['res'][0]['email'], 'Please Confirm your Email ID Myloandetails.com', $message)) {
                    $this->outputData['error'] = ' Problem in sending mail , please try again';
                } else if ($result) {
                    $this->outputData['error'] = 'Please Confirm Verification Mail';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            } else {
                $this->outputData['error'] = 'Password and Confirm password is not matching';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('dsa_register', $this->outputData);
    }

    public function post_mail() {
        $agency_id = $this->uri->segment(3);

        $this->dsa->Update_dsa_status($agency_id);
        $dsa_result['res'] = $this->dsa->check_dsa_idd($agency_id);
        $data['userData'] = $dsa_result['res'][0];
        $message = $this->load->view('Post_Confirmation_of_Account', $data, true);
	$user_name = ucfirst($data['userData']['username']);

	if (!sendEmail($dsa_result['res'][0]['email'], "$user_name ".'Account Activated Myloandetails.com', $message)) {
            $this->outputData['error'] = ' Problem in sending mail , please try again';
        } else {
            $this->outputData['error'] = 'Thank you for using Unlock Great Features please confirm your DSA details.';
        }
        $this->load->view('dsa_register', $this->outputData);
    }

    private function _loginValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Passowrd', 'trim|required');
    }

    public function login() {
        $this->_loginValidate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];

            if ($this->dsa->authenticate($data['username'], $data['password'])) {
                redirect('dsa/Dashboard', 'refresh');
            } else {
                $this->outputData['error'] = 'Invalid Login!!';
            }
        } else {

            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('dsa_login', $this->outputData);
    }

}
