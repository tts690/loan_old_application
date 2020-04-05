<?php

class Home_Loan_Eligibility_Calculator_Residence extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Res_elgi_cal', 'rec');
    }

    function index() {
        $this->load->view('home-loan-eligibility-calculator-residence');
    }

    function calc_resident_salaried_eligibility() {
        //$data = $_POST['data'];
        //print_r($data);
        $BankIdfr = $_POST['selected_bank'];
        $tenure = $_POST['tenure'];
        $roi = $_POST['roi'];
        $monthly_gross_pay = $_POST['monthly_gross_pay'];
        $annual_variable_income = $_POST['annual_variable_income'];
        $calc_type = $_POST['calc_type'];
        $liabilities = $_POST['liabilities'];
        $LiabilitiesAmt = $_POST['LiabilitiesAmt'];
        $PF = $_POST['pf'];
        $PT = $_POST['pt'];
        
        $result_data = $this->rec->calc_resident_salaried_eligibility($BankIdfr, $tenure, $roi, $monthly_gross_pay, $annual_variable_income, $calc_type, $liabilities, $LiabilitiesAmt, $PF, $PT);        
        echo json_encode($result_data);
        //$this->load->view('home-loan-eligibility-calculator-residence',$res);
        //echo '<pre>';print_r($roi);
    }
    
     public function selecting_bank() {
        $data = array();
        $data['bank_id'] = $_POST['selected_bank'];

        $this->outputData['result'] = $this->rec->select_bank($data);
        echo json_encode($this->outputData['result']);
    }
    
    public function interest_tenure() {
        $selected_bank = $_POST['selected_bank'];
        $selected_loan = $_POST['selected_loan'];
        
        $data = $this->rec->get_data($selected_bank, $selected_loan);
        $this->outputData['result'] = $data[0];
        echo json_encode($this->outputData);
    }
    
    function ageCalculator() {
        $dob = $_POST['date_birth'];
        $max_tenure_residence = $_POST['max_tenure_residence']; // this is we passing frm view
        
        $data = $this->rec->get_main_value_settings();
        $result = $data[0];
        $result->max_age_of_resident;
        
        $max_age_res = $result->max_age_of_resident;
        
        $birthdate = new DateTime($dob);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        
        $diff = abs($max_age_res - $age);
       
        if ($age >= $max_age_res) {
            $this->outputData['tenure'] = 0;
        } else {
            if ($diff > $max_age_res) {
                $this->outputData['tenure'] = $max_age_res;
            } else {
                $this->outputData['tenure'] = $diff;
            }
        }
        $this->outputData['age'] = $age;
        echo json_encode($this->outputData);
    }

}
