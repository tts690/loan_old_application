<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Interest_rate_settings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_rate_of_interest() {
        $this->db->select('*');
        $this->db->from('sr_interest_rate');
        $this->db->join('bank', 'bank.bank_id = sr_interest_rate.intrest_rate_id');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function Manage_interest_rate_Create($data){
        try {
            $this->db->insert('sr_interest_rate', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }

    public function Interest_Rate_Editing($data) {
        try {
            $this->db->where(array('intrest_rate_id' => $data['intrest_rate_id']));
            $this->db->update('sr_interest_rate', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function Interest_Rate_Delete($id) {
        $result = $this->db->query("DELETE FROM sr_interest_rate WHERE intrest_rate_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
