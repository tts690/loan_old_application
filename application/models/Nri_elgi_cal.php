<?php

/**
 * Description of nri_elgi_cal
 *
 * @author Web_Dev
 */
class Nri_elgi_cal extends MY_Model {

    function getLoans($bank_id = '') {
        $query = 'SELECT a.* FROM sr_loan a LEFT JOIN sr_bankloans b ON a.LoanIdfr = b.LoanIdfr WHERE b.BankIdfr =' . $bank_id . ' ORDER BY a.LoanIdfr';
        $query = $this->db->query($query);
        if ($query->num_rows() > 0) {
            $results = $query->result();
            return $results;
        } else {
            return false;
        }
    }

    public function get_data($selected_bank, $selected_loan) {
        $this->db->select('nri_min_interest,nri_max_interest,nri_max_tenure');
        $this->db->where('bank_id', $selected_bank);
        $this->db->where('loan_id', $selected_loan);
        $this->db->where('applicable_to_nri', 'True');
        $query = $this->db->get('sr_bank_loan');
        if ($query->num_rows() > 0) {
            $results = $query->result_array();
            return $results;
        } else {
            return false;
        }
    }

    public function get_main_value_settings() {
        $this->db->select('*');
        $this->db->from('main_value_settings');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    function getPercentage($bank_id = '', $calc_type, $liabilities = 'No', $monthly_net_pay = '') {
        if ($liabilities = 'No') {
            $liabilities = 2;
        } else {
            $liabilities = 1;
        }


        $query = 'SELECT percentage FROM foir_setting WHERE bank_id = ' . $bank_id . ' AND income_source_id = "' . $calc_type . '" AND liabilities = ' . $liabilities . ' AND ((from_amount >= 0.00 AND from_amount <= ' . $monthly_net_pay . ') AND to_amount <= ' . $monthly_net_pay . ')';
        //die();
        $query = $this->db->query($query);
        if ($query->num_rows() > 0) {
            $results = $query->row_array();
            return $results['percentage'];
        } else {
            //$query = 'select max(Percentage) as Percentage from sr_slab_ratings a inner join sr_slab_foir_iir b on a.SlabIdfr = b.SlabIdfr where b.BankIdfr = ' . $BankIdfr . ' and b.IncomeSource="' . $incomeSource . '" and b.Liabilities=' . $liabilities . '';
            $query = 'SELECT max(percentage) as percentage FROM foir_setting where bank_id = ' . $bank_id . ' AND income_source_id = "' . $calc_type . '" AND  liabilities=' . $liabilities . '';
            $query = $this->db->query($query);
            if ($query->num_rows() > 0) {
                $results = $query->row_array();
                return $results['percentage'];
            } else {
                return false;
            }
        }
    }

    function calc_nri_salaried_eligibility($bank_id, $tenure, $roi, $calc_type, $liabilities, $LiabilitiesAmt, $monthly_net_pay) {
        $doller_value = 1;
        $percentage = $this->getPercentage($bank_id, $calc_type, $liabilities, $monthly_net_pay);
        //echo "<pre>";
        //print_r($percentage);
        //echo "</pre>";
        //die();
        if ($bank == 2) {
            $monthly_deductions = 480;
            $percentage = $percentage / 100;

            $monthly_income_in_INR = $monthly_net_pay * $doller_value;

            $c = $monthly_income_in_INR * $percentage;
            $home_loan_contribution_HLC = round($c, 0);

            if ($liabilities == 'Yes') {
                $home_loan_contribution_HLC = $home_loan_contribution_HLC - $LiabilitiesAmt;
            }

            $emi_lac_tenure = $this->calculate_emi(100000, $roi, $tenure);
            $home_loan_eligibility = round($home_loan_contribution_HLC / $emi_lac_tenure, 2);
        } else {
            $percentage = $percentage / 100;
            $monthly_income_in_INR = $monthly_net_pay * $doller_value;

            $c = $monthly_income_in_INR * $percentage;
            $home_loan_contribution_HLC = round($c, 0);

            if ($liabilities == 'Yes') {
                $home_loan_contribution_HLC = $home_loan_contribution_HLC - $LiabilitiesAmt;
            }

            $emi_lac_tenure = $this->calculate_emi(100000, $roi, $tenure);
            
            $home_loan_eligibility = round($home_loan_contribution_HLC / $emi_lac_tenure, 2);
            
        }

        //$home_loan_eligibility_in_lakhs = $home_loan_eligibility*100000;
        $home_loan_eligibility_in_lakhs = $home_loan_eligibility;
        //$emi_per_month = $this->calculate_emi($home_loan_eligibility_in_lakhs, $roi, $tenure);
        $emi_per_month = $home_loan_eligibility * $emi_lac_tenure;
        $emi_per_month = round($emi_per_month, 2);
        $emi_per_lac = $emi_per_month / $home_loan_eligibility;
        $emi_per_lac = round($emi_per_lac, 2);
        $data = array();
        $data['home_loan_eligibility'] = $home_loan_eligibility;
        $data['emi_per_month'] = $emi_per_month;
        $data['emi_per_lac'] = $emi_per_lac;
        return $data;
        //return '$percentage='.$percentage.'<br>$monthly_income_in_INR='.$monthly_income_in_INR.'<br>$home_loan_contribution_HLC='.$home_loan_contribution_HLC.'<br>$emi_lac_tenure='.$emi_lac_tenure.'<br>$home_loan_eligibility='.$home_loan_eligibility.'<br>$emi_per_month='.$emi_per_month.'<br>$emi_per_lac='.$emi_per_lac;
    }

    function calculate_emi($a, $b, $c) {
        $n = $c * 12;
        $n = $n > 0 ? $n : 1;
        $r = $b / (12 * 100);
        $division = pow((1 + $r), $n) - 1;
        $division = $division > 0 ? $division : 1;
        $p = ($a * $r * pow((1 + $r), $n)) / ($division);
        $prin = round($p * 100) / 100;
        $mon = round((($n * $prin) - $a) * 100) / 100;
        $tot = round(($mon / $n) * 100) / 100;
        return $prin;
    }

}
