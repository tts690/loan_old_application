<?php

/**
 * Description of Bank_Setup
 *
 * @author HemanthRaj
 */
class Bussiness_Loan_Bank_Setting extends MY_Model{
    
    function Inserting_bank($data){
        $this->db->insert('bussiness_loan_bank', $data);
        return TRUE;
    }
    
    public function select_get_bussiness_loan_bank_data() {
        $this->db->select('*');
        $this->db->from('bussiness_loan_bank');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function Bank_Editing($data, $id) {
        $this->db->where('bussiness_loan_bank_id', $id);
        $result = $this->db->update('bussiness_loan_bank', $data); 
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function bank_Deleteing($id) {
        $result = $this->db->query("DELETE FROM bussiness_loan_bank WHERE bussiness_loan_bank_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}