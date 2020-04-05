<?php

class Home_Loan_Eligibility_Calculator_NRI_Salaried extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Nri_elgi_cal', 'nec');
    }

    function index() {
        $this->load->view('home-loan-eligibility-calculator-nri-salaried');
    }

    function ageCalculator() {
        $dob = $_POST['date_birth'];
        $max_tenure_nri = $_POST['max_tenure_nri']; // this is we passing frm view
        $data = $this->nec->get_main_value_settings();
        $result = $data[0];
        $max_age_nri = $result->max_age_of_nri;

        $birthdate = new DateTime($dob);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;

        $diff = abs($max_age_nri - $age);

        if ($age >= $max_age_nri) {
            $this->outputData['tenure'] = 0;
        } else {
            if ($diff > $max_tenure_nri) {
                $this->outputData['tenure'] = $max_tenure_nri;
            } else {
                $this->outputData['tenure'] = $diff;
            }
        }
        $this->outputData['age'] = $age;
        echo json_encode($this->outputData);
    }

    public function interest_tenure() {
        $selected_bank = $_POST['selected_bank'];
        $selected_loan = $_POST['selected_loan'];
        $data = $this->nec->get_data($selected_bank, $selected_loan);
        $this->outputData['result'] = $data[0];
        echo json_encode($this->outputData);
    }

    function calc_nri_salaried_eligibility() {
        $bank_id = $_POST['selected_bank'];
        $tenure = $_POST['tenure'];
        $roi = $_POST['roi'];
        $calc_type = "N";
        $liabilities = $_POST['liabilities'];
        $LiabilitiesAmt = $_POST['LiabilitiesAmt'];
        $monthly_net_pay = $_POST['monthly_net_pay'];
        $result_data = $this->nec->calc_nri_salaried_eligibility($bank_id, $tenure, $roi, $calc_type, $liabilities, $LiabilitiesAmt, $monthly_net_pay);
//        $this->load->view('home-loan-eligibility-calculator-nri-salaried', $res);
        echo json_encode($result_data);
    }

}
