<?php

/**
 * Description of Bank_Setup
 *
 * @author HemanthRaj
 */
class Bussiness_loan_setting extends MY_Model{
    
    function Inserting_business_loan($data){
        $this->db->insert('business_loan', $data);
        return TRUE;
    }
    
    public function select_get_bussiness_loan_data() {
        $this->db->select('*');
        $this->db->from('business_loan');
        $this->db->join('bussiness_loan_bank', 'bussiness_loan_bank.bussiness_loan_bank_id = business_loan.bussiness_loan_bank_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function Business_Loan_Editing($data, $id) {
        $this->db->where('business_loan_id', $id);
        $result = $this->db->update('business_loan', $data); 
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function business_Loan_Deleteing($id) {
        $result = $this->db->query("DELETE FROM business_loan WHERE business_loan_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}