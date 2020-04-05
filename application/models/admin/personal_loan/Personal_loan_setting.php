<?php

/**
 * Description of Bank_Setup
 *
 * @author HemanthRaj
 */
class Personal_loan_setting extends MY_Model{
    
    function Inserting_personal_loan($data){
        $this->db->insert('personal_loan', $data);
        return TRUE;
    }
    
    public function select_get_personal_loan_data() {
        $this->db->select('*');
        $this->db->from('personal_loan');
        $this->db->join('bank', 'bank.bank_id = personal_loan.bank_id');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function Personal_Loan_Editing($data, $id) {
        $this->db->where('personal_loan_id', $id);
        $result = $this->db->update('personal_loan', $data); 
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function Personal_Loan_Deleteing($id) {
        $result = $this->db->query("DELETE FROM personal_loan WHERE personal_loan_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}