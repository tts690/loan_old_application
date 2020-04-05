<?php

/**
 * Description of nri_elgi_cal
 *
 * @author Web_Dev
 */
class Res_elgi_cal extends MY_Model {

    public function select_bank($data) {
        $this->db->select('*');
        $this->db->where('bank_id', $data['bank_id']);
        $this->db->from('sr_bank_loan');
        $this->db->join('sr_loan', 'sr_loan.id = sr_bank_loan.loan_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    public function get_data($selected_bank, $selected_loan) {
        $this->db->select('res_min_interest,res_max_interest,res_max_tenure');
        $this->db->where('bank_id', $selected_bank);
        $this->db->where('loan_id', $selected_loan);
        //$this->db->where('applicable_to_nri', 'True');
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

    function getSrSettings() {
        $query = 'SELECT tax_exemption_amount, tds FROM main_value_settings';
        $query = $this->db->query($query);
        if ($query->num_rows() > 0) {
            $results = $query->row_array();
            return $results;
        } else {
            return false;
        }
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

    function getPercentage($BankIdfr = '', $incomeSource = 'R', $liabilities = 'No', $amount = '') {
        if ($liabilities = 'No') {
            $liabilities = 2;
        } else {
            $liabilities = 1;
        }
        
        //echo $query = 'select max(percentage) as percentage from foir_setting where bank_id = ' . $BankIdfr . ' AND income_source_id="' . $incomeSource . '" AND liabilities=' . $liabilities . '';
        //die();
        $query = 'SELECT percentage FROM foir_setting WHERE bank_id = ' . $BankIdfr . ' AND income_source_id="' . $incomeSource . '" AND liabilities=' . $liabilities . ' AND ((from_amount>=0.00 AND from_amount<=' . $amount . ') AND to_amount<=' . $amount . ')';
        $query = $this->db->query($query);
        if ($query->num_rows() > 0) {
            $results = $query->row_array();
            return $results['percentage'];
        } else {
            $query = 'select max(percentage) as percentage from foir_setting where bank_id = ' . $BankIdfr . ' AND income_source_id="' . $incomeSource . '" AND liabilities=' . $liabilities . '';
            $query = $this->db->query($query);
            if ($query->num_rows() > 0) {
                $results = $query->row_array();
                return $results['percentage'];
            } else {
                return false;
            }
        }
    }

    function calc_resident_salaried_eligibility($bank, $tenure, $roi, $monthly_gross_pay, $annual_variable_income, $calc_type, $liabilities, $LiabilitiesAmt, $PF, $PT) {
        $percentage = $this->getPercentage($bank, $incomeSource = 'R', $liabilities, $monthly_gross_pay);
        //$percentage = 40;
      
        if ($bank == 2) {
            $settings = $this->getSrSettings();
            $TexExemptionAmount = $settings['tax_exemption_amount'];
            $TDS = $settings['tds'];
            $tax_benefit_amount = 4000;

            $annualGross = $monthly_gross_pay * 12;
            $monthlyIncomeTax = (($annualGross - $TexExemptionAmount) * ($TDS / 100)) / 12;

            $a = ($annual_variable_income / 12);
            $b = $monthly_gross_pay + $a;

            $monthlyNetPay = $b - ($PF + $PT + $monthlyIncomeTax);

            $percentage = $percentage / 100;
            $c = $monthlyNetPay * $percentage;
            $home_loan_contribution_HLC = round($c, 0);
            if ($liabilities == 'Yes') {
                $home_loan_contribution_HLC = $home_loan_contribution_HLC - $LiabilitiesAmt;
            }

            $d = $home_loan_contribution_HLC + $tax_benefit_amount;
            $emi_lac_tenure = $this->calculate_emi(100000, $roi, $tenure);
            $home_loan_eligibility = round($d / $emi_lac_tenure, 2);
        } else {
            $tax_benefit_amount = 4000;

            $a = ($annual_variable_income / 12);
            $b = $monthly_gross_pay + $a;
            $percentage = $percentage / 100;
            $c = $b * $percentage;
            $home_loan_contribution_HLC = round($c, 0);
            
            if ($liabilities == 'Yes') {
                $home_loan_contribution_HLC = $home_loan_contribution_HLC - $LiabilitiesAmt;
            }

            //$d = $home_loan_contribution_HLC + $tax_benefit_amount;
            $d = $home_loan_contribution_HLC;
            $emi_lac_tenure = $this->calculate_emi(100000, $roi, $tenure);
            $home_loan_eligibility = round($d / $emi_lac_tenure, 2);
            

            //echo '$a=($annual_variable_income/12)= '.$a.'<br />$b= $monthly_gross_pay + $a= '.$b.'<br />$percentage=$percentage/100= '.$percentage.'<br />$home_loan_contribution_HLC=$b * $percentage= '.$home_loan_contribution_HLC.'<br />$d=$home_loan_contribution_HLC= '.$d.'<br />$emi_lac_tenure='.$emi_lac_tenure.'<br />$home_loan_eligibility=$d / $emi_lac_tenure='.$home_loan_eligibility;
            //echo '<br><br><br>';
        }

        $home_loan_eligibility_in_lakhs = $home_loan_eligibility * 100000;
        
        $emi_per_month = $this->calculate_emi($home_loan_eligibility_in_lakhs, $roi, $tenure);
        
        $emi_per_month = round($emi_per_month, 2);
        
        $emi_per_lac = $emi_per_month / $home_loan_eligibility;
        
        $emi_per_lac = round($emi_per_lac, 2);
        
        $data = array();
        $data['home_loan_eligibility'] = $home_loan_eligibility;
        $data['emi_per_month'] = $emi_per_month;
        $data['emi_per_lac'] = $emi_per_lac;
        return $data;
    }

}
